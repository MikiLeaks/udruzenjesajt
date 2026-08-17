<?php
$page_title       = 'Politika privatnosti';
$page_description = 'Politika privatnosti Udruženja „Mikiliks veb razvoja" — koje podatke prikupljamo i kako ih obrađujemo.';
require __DIR__ . '/includes/header.php';
?>

<section class="subhero"><div class="container"><div class="breadcrumbs"><a href="index.php">Početna</a> / Politika privatnosti</div><h1>Politika privatnosti</h1></div></section>

<section class="section"><div class="container legal">

<p>Ova politika privatnosti objašnjava koje podatke o ličnosti Udruženje „Mikiliks veb razvoj“ prikuplja putem sajta <?= e($site['domen']) ?>, u koje svrhe, po kom pravnom osnovu, koliko dugo ih čuva i koja prava imate u vezi sa njima, u skladu sa Zakonom o zaštiti podataka o ličnosti („Sl. glasnik RS“, br. 87/2018).</p>

<h2>1. Rukovalac podacima</h2>
<p>Rukovalac podacima o ličnosti prikupljenim putem ovog sajta je:</p>
<p><strong><?= e($site['pun_naziv']) ?></strong><br>
Sedište: <?= e($site['adresa']) ?><br>
PIB: <?= e($site['pib']) ?> · Matični broj: <?= e($site['mb']) ?><br>
E-mail: <a href="mailto:<?= e($site['email']) ?>"><?= e($site['email']) ?></a><br>
Telefon: <a href="tel:<?= e($site['telefon_tel']) ?>"><?= e($site['telefon']) ?></a></p>

<h2>2. Koje podatke prikupljamo</h2>
<h3>2.1 Podaci koje sami unosite</h3>
<p>Podatke o ličnosti prikupljamo isključivo kada nam ih dobrovoljno dostavite putem formi na sajtu:</p>
<ul>
<li><strong>Kontakt forma</strong> (stranica Kontakt): ime i prezime, e-mail, telefon (opciono), tema i naslov poruke, sadržaj poruke.</li>
<li><strong>Pristupnica za članstvo</strong> (stranica Članstvo): ime, prezime, datum rođenja, adresa stanovanja, e-mail, telefon, oblasti interesovanja — u skladu sa članom 5. Statuta Udruženja.</li>
<li><strong>Prijava interesovanja za edukacije</strong> (stranica Edukacije): ime i prezime, e-mail, oblast interesovanja.</li>
<li><strong>Prijava za obaveštenja</strong> (stranica Vesti): e-mail adresa.</li>
</ul>
<h3>2.2 Podaci koje prikupljamo automatski</h3>
<p>Putem kolačića i alata za merenje posećenosti (Google Analytics, Google Tag Manager) automatski se prikupljaju: IP adresa, tip uređaja i pregledača, operativni sistem, stranice koje posećujete, vreme provedeno na sajtu i izvor posete. Ovi podaci se koriste isključivo statistički, radi razumevanja korišćenja sajta. Detalji o kolačićima nalaze se u <a href="kolacici.php">Politici kolačića</a>.</p>

<h2>3. Pravni osnov i svrha obrade</h2>
<ul>
<li><strong>Saglasnost</strong> — za slanje poruka putem kontakt forme, prijavu za newsletter i korišćenje kolačića za analitiku.</li>
<li><strong>Izvršenje statutarnih obaveza</strong> — za obradu pristupnice za članstvo, u skladu sa Statutom Udruženja (čl. 5–9).</li>
<li><strong>Legitimni interes Udruženja</strong> — za odgovaranje na upite, organizaciju edukacija i projekata i unapređenje sadržaja sajta na osnovu statistike posete.</li>
</ul>
<p>Podatke obrađujemo u sledeće svrhe: odgovor na upite i predloge za saradnju; sprovođenje postupka učlanjenja; organizacija edukacija, radionica i projekata; slanje obaveštenja o aktivnostima (samo licima koja su se prijavila); praćenje i unapređenje funkcionisanja sajta.</p>

<h2>4. Kolačići i alati za analitiku</h2>
<p>Sajt koristi Google Analytics i Google Tag Manager radi praćenja posećenosti i ponašanja posetilaca. Ovi servisi mogu obrađivati podatke na serverima izvan Republike Srbije, u skladu sa sopstvenim pravilima o privatnosti kompanije Google LLC. Alati za analitiku se aktiviraju tek nakon što na traci za kolačiće izaberete opciju „Prihvati“; izborom „Samo neophodni“ analitički kolačići se ne postavljaju. Više informacija: <a href="kolacici.php">Politika kolačića</a>.</p>

<h2>5. Deljenje podataka sa trećim licima</h2>
<p>Podatke o ličnosti ne prodajemo i ne ustupamo trećim licima u komercijalne svrhe. Podaci se mogu deliti isključivo sa:</p>
<ul>
<li>pružaocem hosting usluga, radi tehničkog funkcionisanja sajta;</li>
<li>kompanijom Google LLC (Google Analytics, Google Tag Manager, Google Search Console), isključivo u statističke i tehničke svrhe opisane u odeljku 4;</li>
<li>nadležnim državnim organima, kada je to izričito propisano zakonom.</li>
</ul>

<h2>6. Rok čuvanja podataka</h2>
<ul>
<li>Podaci sa kontakt forme i prijava interesovanja čuvaju se dok se upit ne reši, a najduže 2 godine ako se ne uspostavi dalja saradnja.</li>
<li>Podaci članova Udruženja čuvaju se za vreme trajanja članstva i onoliko nakon prestanka članstva koliko nalažu propisi o čuvanju evidencija udruženja.</li>
<li>Podaci sa prijave za obaveštenja čuvaju se do opoziva saglasnosti (odjave).</li>
<li>Podaci prikupljeni putem Google Analytics čuvaju se prema podešenim rokovima tog servisa (podrazumevano do 14 meseci).</li>
</ul>

<h2>7. Bezbednost podataka</h2>
<p>Udruženje preduzima razumne tehničke i organizacione mere radi zaštite podataka od neovlašćenog pristupa, gubitka, izmene ili zloupotrebe. Pristup podacima imaju samo lica kojima je to neophodno radi obavljanja poslova Udruženja.</p>

<h2>8. Prava lica čiji se podaci obrađuju</h2>
<p>U skladu sa Zakonom o zaštiti podataka o ličnosti, imate pravo da:</p>
<ul>
<li>budete obavešteni o obradi svojih podataka;</li>
<li>zatražite pristup podacima koje obrađujemo o vama;</li>
<li>zatražite ispravku ili dopunu netačnih podataka;</li>
<li>zatražite brisanje podataka („pravo na zaborav“);</li>
<li>zatražite ograničenje obrade;</li>
<li>uložite prigovor na obradu zasnovanu na legitimnom interesu;</li>
<li>u svakom trenutku povučete datu saglasnost, bez uticaja na zakonitost obrade pre povlačenja;</li>
<li>podnesete pritužbu Povereniku za informacije od javnog značaja i zaštitu podataka o ličnosti (<a href="https://www.poverenik.rs" target="_blank" rel="noopener noreferrer">www.poverenik.rs</a>), ukoliko smatrate da su vam prava povređena.</li>
</ul>
<p>Zahteve u vezi sa navedenim pravima možete poslati na kontakt podatke iz odeljka 1.</p>

<h2>9. Podaci maloletnih lica</h2>
<p>U skladu sa članom 5. Statuta, maloletno lice sa navršenih 14 godina može se učlaniti u Udruženje uz overenu saglasnost zakonskog zastupnika, a za lice mlađe od 14 godina prijavu podnosi njegov zakonski zastupnik. Molimo da se podaci maloletnih lica putem formi na sajtu ne dostavljaju bez znanja i saglasnosti roditelja, odnosno zakonskog zastupnika.</p>

<h2>10. Izmene ove politike</h2>
<p>Ova politika može se povremeno ažurirati radi usklađivanja sa izmenama propisa, alata ili načina rada sajta. Datum poslednje izmene: 17. avgust 2026. Preporučujemo da ovu stranicu povremeno proveravate.</p>

<h2>11. Kontakt za pitanja o privatnosti</h2>
<p>Za sva pitanja u vezi sa obradom podataka o ličnosti možete nas kontaktirati na <a href="mailto:<?= e($site['email']) ?>"><?= e($site['email']) ?></a>, na broj <a href="tel:<?= e($site['telefon_tel']) ?>"><?= e($site['telefon']) ?></a> ili putem <a href="kontakt.php">kontakt forme</a>.</p>

</div></section>

<?php require __DIR__ . '/includes/footer.php'; ?>
