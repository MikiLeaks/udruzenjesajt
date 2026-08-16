<?php
$page_title       = 'Stranica nije pronađena (404)';
$page_description = 'Tražena stranica ne postoji ili je premeštena. Vratite se na početnu stranu Udruženja „Mikiliks veb razvoja".';
require __DIR__ . '/includes/header.php';
?>

<section class="section" style="padding-top:170px;padding-bottom:170px"><div class="container center"><span class="eyebrow">Greška 404</span><h1 style="font-size:clamp(3rem,7vw,6rem)">Stranica nije pronađena</h1><p class="lead" style="margin:0 auto 30px">Link koji ste otvorili ne postoji ili je premešten. Proverite adresu ili se vratite na jednu od glavnih stranica sajta.</p><div class="hero-actions" style="justify-content:center;display:flex;gap:14px;flex-wrap:wrap"><a class="btn btn-primary" href="index.php">Nazad na početnu <span class="arrow">→</span></a><a class="btn btn-outline" href="kontakt.php">Kontaktirajte nas</a></div></div></section>

<?php require __DIR__ . '/includes/footer.php'; ?>
