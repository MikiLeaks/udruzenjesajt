<?php
$page_title       = 'Uslovi korišćenja';
$page_description = 'Uslovi korišćenja sajta Udruženja „Mikiliks veb razvoja".';
require __DIR__ . '/includes/header.php';
?>

<section class="subhero"><div class="container"><div class="breadcrumbs"><a href="index.php">Početna</a> / Uslovi korišćenja</div><h1>Uslovi korišćenja</h1></div></section>

<section class="section"><div class="container legal">

<p>Ovi uslovi korišćenja uređuju korišćenje sajta <?= e($site['domen']) ?> (u daljem tekstu: sajt), čiji je izdavač <?= e($site['pun_naziv']) ?>, <?= e($site['adresa']) ?>, PIB: <?= e($site['pib']) ?>, matični broj: <?= e($site['mb']) ?> (u daljem tekstu: Udruženje). Pristupom i korišćenjem sajta korisnik prihvata ove uslove.</p>

<h2>1. Namena sajta</h2>
<p>Sajt služi za informisanje javnosti o radu Udruženja — ciljevima, projektima, edukacijama, vestima i dokumentima — kao i za prijavu za članstvo, prijavu interesovanja za edukacije, slanje upita putem kontakt forme i prijavu za obaveštenja. Sajt ne predstavlja platformu za e-trgovinu; trenutno se preko sajta ne vrše onlajn plaćanja.</p>

<h2>2. Prijave i forme na sajtu</h2>
<p>Korišćenjem formi na sajtu (kontakt forma, pristupnica za članstvo, prijava za edukacije, prijava za obaveštenja) korisnik se obavezuje da unese tačne i potpune podatke. Pristupnica za članstvo podleže dodatnim uslovima i postupku predviđenim Statutom Udruženja, dostupnim na stranici <a href="dokumenta.php">Dokumenta</a>. Obrada ličnih podataka prikupljenih putem ovih formi opisana je u <a href="privatnost.php">Politici privatnosti</a>.</p>

<h2>3. Tačnost i dostupnost sadržaja</h2>
<p>Udruženje nastoji da informacije na sajtu (o projektima, edukacijama, terminima, dokumentima) budu tačne i ažurne, ali ne garantuje njihovu potpunu tačnost u svakom trenutku. Sadržaj najava, kalendara i programa treba proveriti neposredno pred korišćenje, po potrebi putem <a href="kontakt.php">kontakt stranice</a>. Sajt može povremeno biti privremeno nedostupan zbog tehničkog održavanja ili razloga van kontrole Udruženja.</p>

<h2>4. Autorska prava i korišćenje sadržaja</h2>
<p>Tekstovi, logo, vizuelni materijali, Statut i drugi sadržaji objavljeni na sajtu vlasništvo su Udruženja ili se objavljuju uz saglasnost nosilaca prava, i zaštićeni su propisima o autorskom i srodnim pravima.</p>
<p>Besplatni edukativni materijali (stranica <a href="materijali.php">Besplatni materijali</a>) mogu se preuzimati i koristiti u nekomercijalne, obrazovne svrhe, uz navođenje Udruženja kao izvora. Svako drugo umnožavanje, distribucija ili komercijalno korišćenje sadržaja sajta nije dozvoljeno bez prethodne pisane saglasnosti Udruženja.</p>

<h2>5. Ponašanje korisnika</h2>
<p>Korisnik se obavezuje da sajt i njegove forme ne koristi za slanje neistinitih, uvredljivih ili štetnih sadržaja, neovlašćeno oglašavanje (spam), pokušaje neovlašćenog pristupa sajtu ili njegovim podacima, niti na način koji ugrožava bezbednost ili funkcionisanje sajta.</p>

<h2>6. Spoljni linkovi</h2>
<p>Sajt može sadržati linkove ka sadržajima trećih lica (partnerske institucije, društvene mreže, izvori vesti i sl.). Udruženje ne kontroliše i ne odgovara za sadržaj, tačnost ili politiku privatnosti tih spoljnih sajtova.</p>

<h2>7. Ograničenje odgovornosti</h2>
<p>Sajt i njegov sadržaj koriste se onakvi kakvi jesu. Udruženje ne odgovara za eventualnu štetu nastalu korišćenjem ili nemogućnošću korišćenja sajta, osim u meri u kojoj je odgovornost izričito propisana važećim zakonom. Korisnik je sam odgovoran za način na koji primenjuje informativne i edukativne sadržaje sa sajta.</p>

<h2>8. Donacije</h2>
<p>Stranica <a href="donacije.php">Donacije</a> trenutno pruža opšte informacije o načinima podrške radu Udruženja. Detaljni podaci za uplatu biće objavljeni kada budu dostupni; do tada se konkretni dogovori oko donacija i saradnje usaglašavaju direktno, putem <a href="kontakt.php">kontakt stranice</a>.</p>

<h2>9. Zaštita podataka i kolačići</h2>
<p>Obrada podataka o ličnosti i upotreba kolačića na sajtu opisani su u <a href="privatnost.php">Politici privatnosti</a> i <a href="kolacici.php">Politici kolačića</a>, koje su sastavni deo ovih uslova.</p>

<h2>10. Merodavno pravo</h2>
<p>Na ove uslove i korišćenje sajta primenjuje se pravo Republike Srbije. Eventualni sporovi rešavaju se dogovorom, a u suprotnom pred nadležnim sudom prema sedištu Udruženja u Kragujevcu.</p>

<h2>11. Izmene uslova</h2>
<p>Udruženje može povremeno izmeniti ove uslove radi usklađivanja sa funkcionalnostima sajta ili važećim propisima. Izmene stupaju na snagu objavljivanjem na ovoj stranici. Datum poslednje izmene: 17. avgust 2026.</p>

<h2>12. Kontakt</h2>
<p>Pitanja u vezi sa ovim uslovima možete poslati na <a href="mailto:<?= e($site['email']) ?>"><?= e($site['email']) ?></a>, na broj <a href="tel:<?= e($site['telefon_tel']) ?>"><?= e($site['telefon']) ?></a> ili putem <a href="kontakt.php">kontakt forme</a>.</p>

</div></section>

<?php require __DIR__ . '/includes/footer.php'; ?>
