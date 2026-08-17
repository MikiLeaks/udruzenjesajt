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
    'adresa'     => 'Kralja Milana IV 13/21, 34000 Kragujevac, Srbija',
    'radno_vreme' => 'Pon–pet: 09:00–17:00',
    'telefon'    => '066/907-9557',
    'telefon_tel' => '+381669079557',
    'pib'        => '109243073',
    'mb'         => '28185685',
    'gtm_id'     => 'GTM-NNFZHCTF',
    'ga_id'      => 'G-QXE6F0B3FX',
    'jezik'      => 'sr',
    'opis'       => 'Dobrovoljno, nevladino i neprofitno udruženje posvećeno obrazovanju, '
                  . 'nauci, informacionim tehnologijama, veb razvoju i digitalnoj pismenosti.',

    /* Domen sajta BEZ kose crte na kraju — koristi se za favicon, canonical i
       og:url/og:image linkove. VAŽNO: zameni kada registruješ pravi domen. */
    'domen'      => 'https://www.udruzenje-mikiliks-veb-razvoj.rs',

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
    'facebook'  => 'https://www.facebook.com/udruzenjemvr/',
    'instagram' => 'https://www.instagram.com/udruzenjemikiliksvebrazvoj/',
    'x'         => 'https://x.com/udruzenjemvr',
    'youtube'   => 'https://www.youtube.com/@udruzenjemikiliksvebrazvoj',
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

/** Inline SVG ikonica za društvenu mrežu (koristi currentColor, boji se preko CSS-a). */
function ikonica_mreze(string $mreza): string
{
    $ikonice = [
        'facebook'  => '<svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" aria-hidden="true"><path d="M22 12.06C22 6.505 17.523 2 12 2S2 6.505 2 12.06c0 5.02 3.657 9.184 8.438 9.94v-7.03H7.898v-2.91h2.54V9.845c0-2.507 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.459h-1.26c-1.242 0-1.63.771-1.63 1.562v1.878h2.773l-.443 2.91h-2.33V22c4.78-.756 8.437-4.92 8.437-9.94Z"/></svg>',
        'instagram' => '<svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4.2"/><circle cx="17.35" cy="6.65" r="1"/></svg>',
        'x'         => '<svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" aria-hidden="true"><path d="M18.244 2H21.5l-7.51 8.59L22.86 22h-6.92l-5.42-6.86L4.34 22H1.08l8.04-9.19L1.5 2h7.09l4.9 6.27L18.244 2Zm-1.215 18h1.918L7.06 3.9H5.02l11.99 16.1Z"/></svg>',
        'youtube'   => '<svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><rect x="2.5" y="6" width="19" height="12" rx="4"/><path d="M10.5 9.5v5l4.5-2.5-4.5-2.5Z" fill="currentColor" stroke="none"/></svg>',
        'linkedin'  => '<svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" aria-hidden="true"><path d="M6.94 8.5H3.56V21h3.38V8.5ZM5.25 3a1.96 1.96 0 1 0 0 3.92A1.96 1.96 0 0 0 5.25 3ZM21 21h-3.38v-6.1c0-1.45-.03-3.32-2.03-3.32-2.03 0-2.34 1.58-2.34 3.22V21H9.87V8.5h3.24v1.7h.05c.45-.86 1.56-1.77 3.22-1.77 3.44 0 4.08 2.27 4.08 5.21V21Z"/></svg>',
    ];
    return $ikonice[$mreza] ?? '';
}

/** Nazivi mreža za aria-label / alt tekst. */
function naziv_mreze(string $mreza): string
{
    $nazivi = ['facebook' => 'Facebook', 'instagram' => 'Instagram', 'x' => 'X (Twitter)', 'youtube' => 'YouTube', 'linkedin' => 'LinkedIn'];
    return $nazivi[$mreza] ?? ucfirst($mreza);
}
