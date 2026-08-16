<?php
/** Zajednički futer za sve stranice. */
require_once __DIR__ . '/config.php';
?>
<footer class="footer">
  <div class="container">
    <div class="footer-grid">
      <div>
        <img class="footer-logo" src="assets/img/logo.svg" alt="<?= e($site['naziv']) ?>">
        <p><?= e($site['opis']) ?></p>
      </div>

      <?php foreach ($footer_kolone as $naslov => $linkovi): ?>
      <div>
        <h4><?= e($naslov) ?></h4>
        <div class="footer-links">
          <?php foreach ($linkovi as $link => $tekst): ?>
          <a href="<?= e($link) ?>"><?= e($tekst) ?></a>
          <?php endforeach; ?>
        </div>
      </div>
      <?php endforeach; ?>

      <div>
        <h4>Kontakt</h4>
        <div class="contact-line"><span>⌖</span><span><?= e($site['grad']) ?></span></div>
        <div class="contact-line"><span>✉</span><a href="mailto:<?= e($site['email']) ?>"><?= e($site['email']) ?></a></div>
      </div>
    </div>

    <div class="copyright">
      <div>© <?= date('Y') ?> <?= e($site['pun_naziv']) ?>.</div>
      <span>
        <?php $prvi = true; foreach ($footer_pravno as $link => $tekst): ?>
        <?= $prvi ? '' : ' · ' ?><a href="<?= e($link) ?>"><?= e($tekst) ?></a>
        <?php $prvi = false; endforeach; ?>
      </span>
    </div>
  </div>
</footer>

<div class="cookie-banner">
  <p>Ovaj sajt koristi samo neophodno lokalno čuvanje izbora o kolačićima. Više informacija je u
     <a href="kolacici.php" style="color:#075fbf;font-weight:800">Politici kolačića</a>.</p>
  <div class="cookie-actions">
    <button class="btn btn-outline btn-sm" data-cookie="necessary">Samo neophodni</button>
    <button class="btn btn-primary btn-sm" data-cookie="accepted">Prihvati</button>
  </div>
</div>

<script src="assets/js/main.js"></script>
</body>
</html>
