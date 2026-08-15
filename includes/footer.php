</main>

<footer class="footer">
    <div class="container">
        <div class="footer-grid">
            <div>
                <img class="footer-logo" src="assets/img/logo.svg" alt="<?= e(SITE_NAME) ?>">
                <p>Dobrovoljno, nevladino i neprofitno udruženje posvećeno obrazovanju, nauci, informacionim tehnologijama, veb razvoju i digitalnoj pismenosti.</p>
            </div>
            <div>
                <h4>Udruženje</h4>
                <div class="footer-links">
                    <a href="o-nama.php">O nama</a>
                    <a href="clanstvo.php">Članstvo</a>
                    <a href="dokumenta.php">Dokumenta</a>
                    <a href="donacije.php">Donacije</a>
                    <a href="kontakt.php">Kontakt</a>
                </div>
            </div>
            <div>
                <h4>Programi</h4>
                <div class="footer-links">
                    <a href="edukacije.php">Kursevi i edukacije</a>
                    <a href="materijali.php">Besplatni materijali</a>
                    <a href="portfolio.php">Portfolio projekata</a>
                    <a href="blog.php">Blog</a>
                    <a href="projekti.php#galerija">Galerija</a>
                </div>
            </div>
            <div>
                <h4>Kontakt</h4>
                <div class="contact-line"><span>⌖</span><span><?= e(SITE_LOCATION) ?></span></div>
                <div class="contact-line"><span>✉</span><a href="mailto:<?= e(SITE_EMAIL) ?>"><?= e(SITE_EMAIL) ?></a></div>
            </div>
        </div>
        <div class="copyright">
            <div>© <?= date('Y') ?> Udruženje „<?= e(SITE_NAME) ?>“.</div>
            <span>
                <a href="privatnost.php">Privatnost</a> ·
                <a href="kolacici.php">Kolačići</a> ·
                <a href="uslovi-koriscenja.php">Uslovi korišćenja</a>
            </span>
        </div>
    </div>
</footer>

<div class="cookie-banner">
    <p>Ovaj demo koristi samo neophodno lokalno čuvanje izbora o kolačićima. Više informacija je u <a href="kolacici.php" style="color:#075fbf;font-weight:800">Politici kolačića</a>.</p>
    <div class="cookie-actions">
        <button class="btn btn-outline btn-sm" type="button" data-cookie="necessary">Samo neophodni</button>
        <button class="btn btn-primary btn-sm" type="button" data-cookie="accepted">Prihvati</button>
    </div>
</div>

<script src="assets/js/main.js"></script>
</body>
</html>
