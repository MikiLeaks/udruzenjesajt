<?php
/**
 * Centralna obrada formi sa sajta (kontakt, a kasnije i članstvo, prijave za
 * edukacije itd.) — po jedan fajl za sve, razlikuje ih skriveno polje "tip".
 *
 * Šalje e-mail preko PHP mail() funkcije (radi bez podešavanja na cPanel
 * hostingu). Vraća JSON kada poziv dolazi iz main.js (fetch), a kada JavaScript
 * nije dostupan — preusmerava nazad na formu sa ?status=ok / ?status=greska.
 */
declare(strict_types=1);
session_start();
mb_internal_encoding('UTF-8');
require __DIR__ . '/includes/config.php';

$je_ajax = ($_SERVER['HTTP_X_REQUESTED_WITH'] ?? '') === 'fetch';

/** Završava izvršavanje i vraća odgovor — JSON za AJAX, redirect za sve ostalo. */
function odgovori(bool $uspeh, string $poruka, string $povratna_stranica, bool $je_ajax): void
{
    if ($je_ajax) {
        header('Content-Type: application/json; charset=utf-8');
        http_response_code($uspeh ? 200 : 422);
        echo json_encode(['success' => $uspeh, 'message' => $poruka], JSON_UNESCAPED_UNICODE);
        exit;
    }
    header('Location: ' . $povratna_stranica . '?status=' . ($uspeh ? 'ok' : 'greska'));
    exit;
}

/** Ukloni razmake sa krajeva i znakove za novi red (zaštita od header injection). */
function ocisti(string $vrednost): string
{
    return trim(str_replace(["\r", "\n"], ' ', $vrednost));
}

/** Obrada kontakt forme sa kontakt.php stranice. */
function obradi_kontakt_formu(array $site, bool $je_ajax): void
{
    $ime      = ocisti((string) ($_POST['ime'] ?? ''));
    $email    = ocisti((string) ($_POST['email'] ?? ''));
    $telefon  = ocisti((string) ($_POST['telefon'] ?? ''));
    $tema     = ocisti((string) ($_POST['tema'] ?? ''));
    $naslov   = ocisti((string) ($_POST['naslov'] ?? ''));
    $poruka   = trim((string) ($_POST['poruka'] ?? ''));
    $saglasan = isset($_POST['saglasnost']);

    $dozvoljene_teme = ['Opšte pitanje', 'Članstvo', 'Edukacije', 'Projekti i saradnja', 'Donacije'];

    $greske = [];
    if ($ime === '' || mb_strlen($ime) < 2 || mb_strlen($ime) > 150)         $greske[] = 'ime';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($email) > 190) $greske[] = 'email';
    if ($telefon !== '' && !preg_match('/^[0-9+\-\s()]{5,30}$/', $telefon)) $greske[] = 'telefon';
    if (!in_array($tema, $dozvoljene_teme, true))                          $greske[] = 'tema';
    if ($naslov === '' || mb_strlen($naslov) > 200)                        $greske[] = 'naslov';
    if (mb_strlen($poruka) < 5 || mb_strlen($poruka) > 5000)               $greske[] = 'poruka';
    if (!$saglasan)                                                        $greske[] = 'saglasnost';

    if ($greske) {
        odgovori(false, 'Proverite da li su sva obavezna polja ispravno popunjena.', 'kontakt.php', $je_ajax);
    }

    $predmet = '[Kontakt forma] ' . $tema . ': ' . mb_substr($naslov, 0, 120);

    $telo  = "Nova poruka sa kontakt forme sajta {$site['naziv']}\n\n";
    $telo .= "Ime i prezime: {$ime}\n";
    $telo .= "E-mail: {$email}\n";
    $telo .= 'Telefon: ' . ($telefon !== '' ? $telefon : '—') . "\n";
    $telo .= "Tema: {$tema}\n";
    $telo .= "Naslov: {$naslov}\n\n";
    $telo .= "Poruka:\n{$poruka}\n\n";
    $telo .= '—' . "\n";
    $telo .= 'Poslato: ' . date('d.m.Y H:i') . "\n";
    $telo .= 'IP adresa: ' . ($_SERVER['REMOTE_ADDR'] ?? 'nepoznato') . "\n";

    $domen_bez_protokola = preg_replace('~^https?://(www\.)?~', '', rtrim($site['domen'], '/'));
    $od_adrese            = 'noreply@' . $domen_bez_protokola;

    $zaglavlja   = [];
    $zaglavlja[] = 'From: ' . $site['naziv'] . ' <' . $od_adrese . '>';
    $zaglavlja[] = 'Reply-To: ' . $email;
    $zaglavlja[] = 'Content-Type: text/plain; charset=UTF-8';
    $zaglavlja[] = 'X-Mailer: PHP/' . phpversion();

    $poslato = @mail(
        $site['email'],
        mb_encode_mimeheader($predmet, 'UTF-8'),
        $telo,
        implode("\r\n", $zaglavlja)
    );

    $_SESSION['poslednje_slanje'] = time();

    if ($poslato) {
        odgovori(true, "Hvala, {$ime}! Vaša poruka je uspešno poslata — odgovorićemo vam u najkraćem roku.", 'kontakt.php', $je_ajax);
    }

    odgovori(false, 'Došlo je do greške prilikom slanja. Pokušajte ponovo ili nam pišite direktno na ' . $site['email'] . '.', 'kontakt.php', $je_ajax);
}

/* ---------------------------------------------------------------------------
   Zajednička provera za sve forme: samo POST, CSRF token, honeypot, i osnovna
   zaštita od preplavljivanja (jedno slanje na 20 sekundi po sesiji).
   --------------------------------------------------------------------------- */

if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    odgovori(false, 'Nevažeći zahtev.', 'kontakt.php', $je_ajax);
}

$tip      = (string) ($_POST['tip'] ?? '');
$povratna = match ($tip) {
    'kontakt' => 'kontakt.php',
    default   => 'kontakt.php',
};

$token = (string) ($_POST['csrf_token'] ?? '');
if ($token === '' || empty($_SESSION['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $token)) {
    odgovori(false, 'Sesija je istekla — osvežite stranicu i pokušajte ponovo.', $povratna, $je_ajax);
}

/* Honeypot: skriveno polje koje pravi posetioci nikad ne popunjavaju.
   Ako je popunjeno — verovatno je bot; tiho se "pretvaramo" da je uspelo. */
if (!empty($_POST['web_adresa'])) {
    odgovori(true, 'Hvala! Vaša poruka je poslata.', $povratna, $je_ajax);
}

if (!empty($_SESSION['poslednje_slanje']) && (time() - $_SESSION['poslednje_slanje']) < 20) {
    odgovori(false, 'Sačekajte malo pre nego što pošaljete novu poruku.', $povratna, $je_ajax);
}

switch ($tip) {
    case 'kontakt':
        obradi_kontakt_formu($site, $je_ajax);
        break;
    default:
        odgovori(false, 'Nepoznat tip forme.', 'kontakt.php', $je_ajax);
}
