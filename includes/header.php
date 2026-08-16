<?php
/**
 * Zajedničko zaglavlje za sve stranice.
 * Stranica pre uključivanja može da postavi: $page_title, $page_description, $page_image.
 */
require_once __DIR__ . '/config.php';

$page_title       = $page_title       ?? $site['naziv'];
$page_description = $page_description ?? $site['opis'];
?>
<!doctype html>
<html lang="<?= e($site['jezik']) ?>">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title><?= e($page_title) ?> | <?= e($site['naziv']) ?></title>
<meta name="description" content="<?= e($page_description) ?>">
<link rel="icon" href="assets/img/logo.svg">
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
      <span class="top-item"><i class="top-dot"></i><?= e($site['napomena']) ?></span>
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
