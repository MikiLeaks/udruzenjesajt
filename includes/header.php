<?php
/**
 * Zajedničko zaglavlje za sve stranice.
 * Stranica pre uključivanja može da postavi: $page_title, $page_description, $page_image.
 */
require_once __DIR__ . '/config.php';

$page_title       = $page_title       ?? $site['naziv'];
$page_description = $page_description ?? $site['opis'];
$page_keywords    = $page_keywords    ?? $site['kljucne_reci'];
$page_image       = $page_image       ?? $site['slika_deljenje'];

/* Apsolutni URL-ovi — potrebni za canonical, og:url i og:image
   (društvene mreže i Viber ne prikazuju relativne putanje). */
$domen          = rtrim($site['domen'], '/');
$trenutna       = trenutna_strana();
$kanonski_url   = $trenutna === 'index.php' ? $domen . '/' : $domen . '/' . $trenutna;
$slika_url      = $domen . '/' . ltrim($page_image, '/');
$puni_naslov    = $page_title === $site['naziv'] ? $page_title : $page_title . ' | ' . $site['naziv'];
?>
<!doctype html>
<html lang="<?= e($site['jezik']) ?>">
<head>
<!-- Konfiguracija za analitiku (GTM/GA se ne pokreću ovde — main.js ih učitava tek posle saglasnosti na traci za kolačiće) -->
<script>window.mwdAnalyticsConfig={gtmId:<?= json_encode($site['gtm_id']) ?>,gaId:<?= json_encode($site['ga_id']) ?>};</script>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title><?= e($puni_naslov) ?></title>

<!-- Osnovni meta podaci -->
<meta name="description" content="<?= e($page_description) ?>">
<meta name="keywords" content="<?= e($page_keywords) ?>">
<meta name="author" content="<?= e($site['autor']) ?>">
<meta name="robots" content="index, follow">
<meta name="theme-color" content="#117fe8">
<link rel="canonical" href="<?= e($kanonski_url) ?>">

<!-- Favicon (isti znak kao logo, u više formata radi kompatibilnosti) -->
<link rel="icon" type="image/svg+xml" href="assets/img/logo.svg">
<link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32.png">
<link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">

<!-- Open Graph (Facebook, Viber, LinkedIn...) -->
<meta property="og:type" content="website">
<meta property="og:site_name" content="<?= e($site['naziv']) ?>">
<meta property="og:locale" content="sr_RS">
<meta property="og:title" content="<?= e($page_title) ?>">
<meta property="og:description" content="<?= e($page_description) ?>">
<meta property="og:url" content="<?= e($kanonski_url) ?>">
<meta property="og:image" content="<?= e($slika_url) ?>">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="<?= e($site['pun_naziv']) ?>">

<!-- Twitter/X Card (isti podaci, Instagram/Viber koriste Open Graph iznad) -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= e($page_title) ?>">
<meta name="twitter:description" content="<?= e($page_description) ?>">
<meta name="twitter:image" content="<?= e($slika_url) ?>">

<!-- Strukturirani podaci za pretraživače (Google, Bing...) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": <?= json_encode($site['pun_naziv'], JSON_UNESCAPED_UNICODE) ?>,
  "url": <?= json_encode($domen . '/', JSON_UNESCAPED_UNICODE) ?>,
  "logo": <?= json_encode($domen . '/assets/img/logo.svg', JSON_UNESCAPED_UNICODE) ?>,
  "email": <?= json_encode($site['email'], JSON_UNESCAPED_UNICODE) ?>,
  "telephone": <?= json_encode($site['telefon_tel'], JSON_UNESCAPED_UNICODE) ?>,
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Kralja Milana IV 13/21",
    "postalCode": "34000",
    "addressLocality": "Kragujevac",
    "addressCountry": "RS"
  },
  "taxID": <?= json_encode($site['pib'], JSON_UNESCAPED_UNICODE) ?>,
  "identifier": {
    "@type": "PropertyValue",
    "name": "Matični broj",
    "value": <?= json_encode($site['mb'], JSON_UNESCAPED_UNICODE) ?>
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
    "opens": "09:00",
    "closes": "17:00"
  }<?php $mreze = array_values(array_filter($drustvene_mreze)); if ($mreze): ?>,
  "sameAs": <?= json_encode($mreze, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?>
  <?php endif; ?>
}
</script>

<?php foreach (array_filter($drustvene_mreze) as $mreza_link): ?>
<link rel="me" href="<?= e($mreza_link) ?>">
<?php endforeach; ?>

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="topbar">
  <div class="container topbar-inner">
    <div class="top-items">
      <span class="top-item"><i class="top-dot"></i><?= e($site['grad']) ?></span>
      <a class="top-item" href="mailto:<?= e($site['email']) ?>"><i class="top-dot"></i><?= e($site['email']) ?></a>
    </div>
    <div class="top-items">
      <?php $aktivne_mreze = array_filter($drustvene_mreze); if ($aktivne_mreze): ?>
      <div class="topbar-social">
        <?php foreach ($aktivne_mreze as $mreza => $link): ?>
        <a href="<?= e($link) ?>" target="_blank" rel="noopener noreferrer" aria-label="<?= e(naziv_mreze($mreza)) ?>"><?= ikonica_mreze($mreza) ?></a>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>
    </div>
  </div>
</div>

<header class="header">
  <div class="container nav">
    <a class="logo" href="index.php" aria-label="Početna">
      <img src="assets/img/logo.svg" alt="<?= e($site['naziv']) ?>">
    </a>
    <nav class="menu" aria-label="Glavna navigacija">
      <?php foreach ($meni as $link => $naziv): ?>
      <a href="<?= e($link) ?>"<?= aktivna_klasa($link) ?>><?= e($naziv) ?></a>
      <?php endforeach; ?>
    </nav>
    <div class="nav-actions">
      <a class="btn btn-primary btn-sm" href="<?= e($cta['link']) ?>"><?= e($cta['tekst']) ?> <span class="arrow">→</span></a>
      <button class="hamburger" aria-label="Otvori meni" aria-expanded="false"><span></span><span></span><span></span></button>
    </div>
  </div>
</header>

<nav class="mobile-panel" aria-label="Mobilna navigacija">
  <?php foreach ($meni + $meni_mobilni_dodatno as $link => $naziv): ?>
  <a href="<?= e($link) ?>"><?= e($naziv) ?></a>
  <?php endforeach; ?>
</nav>
