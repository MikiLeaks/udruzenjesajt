<?php
require_once __DIR__ . '/config.php';

$pageTitle = $pageTitle ?? SITE_NAME;
$pageDescription = $pageDescription ?? '';
$activePage = $activePage ?? '';

$mainNavigation = [
    'index' => ['index.php', 'Početna'],
    'o-nama' => ['o-nama.php', 'O nama'],
    'projekti' => ['projekti.php', 'Projekti'],
    'edukacije' => ['edukacije.php', 'Edukacije'],
    'vesti' => ['vesti.php', 'Vesti'],
    'dokumenta' => ['dokumenta.php', 'Dokumenta'],
    'kontakt' => ['kontakt.php', 'Kontakt'],
];

$mobileNavigation = $mainNavigation + [
    'clanstvo' => ['clanstvo.php', 'Članstvo'],
    'donacije' => ['donacije.php', 'Donacije i podrška'],
];
?>
<!doctype html>
<html lang="sr-Latn">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?= e($pageTitle) ?></title>
    <meta name="description" content="<?= e($pageDescription) ?>">
    <link rel="icon" href="assets/img/logo.svg">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="topbar">
    <div class="container topbar-inner">
        <div class="top-items">
            <span class="top-item"><i class="top-dot"></i><?= e(SITE_LOCATION) ?></span>
            <a class="top-item" href="mailto:<?= e(SITE_EMAIL) ?>"><i class="top-dot"></i><?= e(SITE_EMAIL) ?></a>
        </div>
        <div class="top-items">
            <span class="top-item"><i class="top-dot"></i><?= e(SITE_STATUS) ?></span>
        </div>
    </div>
</div>

<header class="header">
    <div class="container nav">
        <a class="logo" href="index.php" aria-label="Početna">
            <img src="assets/img/logo.svg" alt="<?= e(SITE_NAME) ?>">
        </a>

        <nav class="menu" aria-label="Glavna navigacija">
            <?php foreach ($mainNavigation as $key => [$url, $label]): ?>
                <a href="<?= e($url) ?>"<?= $activePage === $key ? ' class="active" aria-current="page"' : '' ?>><?= e($label) ?></a>
            <?php endforeach; ?>
        </nav>

        <div class="nav-actions">
            <a class="btn btn-primary btn-sm" href="clanstvo.php">Postani član <span class="arrow">→</span></a>
            <button class="hamburger" type="button" aria-label="Otvori meni" aria-expanded="false">
                <span></span><span></span><span></span>
            </button>
        </div>
    </div>
</header>

<nav class="mobile-panel" aria-label="Mobilna navigacija">
    <?php foreach ($mobileNavigation as $key => [$url, $label]): ?>
        <a href="<?= e($url) ?>"<?= $activePage === $key ? ' class="active" aria-current="page"' : '' ?>><?= e($label) ?></a>
    <?php endforeach; ?>
</nav>

<main id="main-content">
