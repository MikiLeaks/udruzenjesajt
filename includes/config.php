<?php
/**
 * Centralna konfiguracija sajta.
 * Sve što se menja na jednom mestu: naziv, kontakt podaci, meni i linkovi u futeru.
 */
declare(strict_types=1);

/* ---------------------------------------------------------------------------
   1) OSNOVNI PODACI O UDRUŽENJU
   --------------------------------------------------------------------------- */
$site = [
    'naziv'      => 'Mikiliks veb razvoj',
    'pun_naziv'  => 'Udruženje „Mikiliks veb razvoj“',
    'email'      => 'info@udruzenje-mikiliks-veb-razvoj.rs',
    'grad'       => '34000 Kragujevac, Srbija',
    'napomena'   => 'Udruženje od javnog interesa',
    'jezik'      => 'sr',
    'opis'       => 'Dobrovoljno, nevladino i neprofitno udruženje posvećeno obrazovanju, '
                  . 'nauci, informacionim tehnologijama, veb razvoju i digitalnoj pismenosti.',

    /* Domen sajta BEZ kose crte na kraju — koristi se za favicon, canonical i
       og:url/og:image linkove. VAŽNO: zameni kada registruješ pravi domen. */
    'domen'      => 'https://udruzenje-mikiliks-veb-razvoj.rs',

    /* Autor sadržaja — meta name="author" */
    'autor'      => 'Udruženje „Mikiliks veb razvoj“',

    /* Podrazumevane ključne reči (meta keywords) — pretraživači ih danas
       uglavnom ignorišu za rangiranje, ali ih neki alati i dalje čitaju. */
    'kljucne_reci' => 'udruženje, Mikiliks veb razvoj, Kragujevac, obrazovanje, '
                     . 'informacione tehnologije, veb razvoj, programiranje, '
                     . 'digitalna pismenost, edukacije, nevladina organizacija',

    /* Podrazumevana slika za deljenje na Viberu/Instagramu/Fejsbuku/Tviteru
       (Open Graph / Twitter Card). Svaka strana može da je preklopi tako što
       pre require-a header.php postavi $page_image = 'assets/img/nesto.jpg'. */
    'slika_deljenje' => 'assets/img/social-share.jpg',
];

/* ---------------------------------------------------------------------------
   1b) DRUŠTVENE MREŽE
   Ostavi prazan string '' za mrežu koju udruženje još nema — kod će je
   automatski preskočiti i neće praviti "mrtve" linkove.
   --------------------------------------------------------------------------- */
$drustvene_mreze = [
    'facebook'  => '',
    'instagram' => '',
    'linkedin'  => '',
    'youtube'   => '',
];


/* ---------------------------------------------------------------------------
   2) GLAVNI MENI  (kljuc = fajl, vrednost = tekst u meniju)
   --------------------------------------------------------------------------- */
$meni = [
    'index.php'     => 'Početna',
    'o-nama.php'    => 'O nama',
    'projekti.php'  => 'Projekti',
    'edukacije.php' => 'Edukacije',
    'vesti.php'     => 'Vesti',
    'dokumenta.php' => 'Dokumenta',
    'kontakt.php'   => 'Kontakt',
];

/* Dodatne stavke koje se prikazuju samo u mobilnom meniju */
$meni_mobilni_dodatno = [
    'clanstvo.php' => 'Članstvo',
    'donacije.php' => 'Donacije i podrška',
];

/* Dugme u zaglavlju */
$cta = [
    'link'  => 'clanstvo.php',
    'tekst' => 'Postani član',
];

/* ---------------------------------------------------------------------------
   3) LINKOVI U FUTERU
   --------------------------------------------------------------------------- */
$footer_kolone = [
    'Udruženje' => [
        'o-nama.php'    => 'O nama',
        'clanstvo.php'  => 'Članstvo',
        'dokumenta.php' => 'Dokumenta',
        'donacije.php'  => 'Donacije',
        'kontakt.php'   => 'Kontakt',
    ],
    'Programi' => [
        'edukacije.php'        => 'Kursevi i edukacije',
        'materijali.php'       => 'Besplatni materijali',
        'portfolio.php'        => 'Portfolio projekata',
        'blog.php'             => 'Blog',
        'projekti.php#galerija' => 'Galerija',
    ],
];

/* Pravni linkovi u dnu strane */
$footer_pravno = [
    'privatnost.php'        => 'Privatnost',
    'kolacici.php'          => 'Kolačići',
    'uslovi-koriscenja.php' => 'Uslovi korišćenja',
];

/* ---------------------------------------------------------------------------
   4) POMOĆNE FUNKCIJE
   --------------------------------------------------------------------------- */

/** Bezbedan ispis teksta u HTML-u. */
function e(?string $tekst): string
{
    return htmlspecialchars((string) $tekst, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

/** Naziv fajla trenutno otvorene stranice, npr. "o-nama.php". */
function trenutna_strana(): string
{
    return basename($_SERVER['SCRIPT_NAME'] ?? 'index.php');
}

/** Vraća class="active" ako je prosleđeni link trenutno otvorena stranica. */
function aktivna_klasa(string $link): string
{
    return strtok($link, '#') === trenutna_strana() ? ' class="active"' : '';
}
