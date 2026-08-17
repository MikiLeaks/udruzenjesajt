<?php
$page_title       = 'Politika kolačića';
$page_description = 'Politika kolačića na sajtu Udruženja „Mikiliks veb razvoja".';
require __DIR__ . '/includes/header.php';
?>

<section class="subhero"><div class="container"><div class="breadcrumbs"><a href="index.php">Početna</a> / Politika kolačića</div><h1>Politika kolačića</h1></div></section>

<section class="section"><div class="container legal">

<p>Ova politika objašnjava koje kolačiće i slične tehnologije sajt <?= e($site['domen']) ?> koristi, u koje svrhe, koliko traju i kako možete upravljati svojim izborom. Rukovalac podacima je <?= e($site['pun_naziv']) ?>, <?= e($site['adresa']) ?>, e-mail: <a href="mailto:<?= e($site['email']) ?>"><?= e($site['email']) ?></a>. Za detalje o obradi podataka o ličnosti pogledajte i <a href="privatnost.php">Politiku privatnosti</a>.</p>

<h2>1. Šta su kolačići</h2>
<p>Kolačići (cookies) su male tekstualne datoteke koje sajt čuva u vašem pregledaču radi funkcionisanja, bezbednosti, analitike ili personalizacije. Pored kolačića, sajt koristi i lokalno skladište pregledača (local storage) u iste svrhe — u ovoj politici ih zajednički nazivamo „kolačići“.</p>

<h2>2. Kolačići koje sajt koristi</h2>
<h3>2.1 Neophodni (uvek aktivni)</h3>
<p>Ovi zapisi su neophodni za osnovno funkcionisanje sajta i ne mogu se isključiti.</p>
<ul>
<li><strong>mwdCookies</strong> — lokalno skladište koje pamti vaš izbor na traci za kolačiće (Prihvati / Samo neophodni), kako vam se obaveštenje ne bi ponovo prikazivalo. Traje dok ga ne obrišete kroz podešavanja pregledača.</li>
</ul>
<h3>2.2 Analitički kolačići</h3>
<p>Koristimo Google Analytics i Google Tag Manager da razumemo kako se sajt koristi (broj poseta, posećene stranice, poreklo saobraćaja) i da ga na osnovu toga unapredimo. Google pri tome može postavljati kolačiće poput:</p>
<ul>
<li><strong>_ga</strong> — razlikuje jedinstvene posetioce, traje do 2 godine.</li>
<li><strong>_ga_&lt;ID&gt;</strong> — pamti stanje sesije za Google Analytics 4, traje do 2 godine.</li>
<li><strong>_gid</strong> — razlikuje posetioce u kraćem periodu, traje do 24 časa.</li>
</ul>
<p>Ovi podaci se obrađuju u agregiranom, statističkom obliku i ne koristimo ih za identifikaciju pojedinačnih posetilaca van svrhe merenja posećenosti.</p>

<h2>3. Kako dajete saglasnost</h2>
<p>Pri prvoj poseti sajtu prikazuje se traka sa dve opcije:</p>
<ul>
<li><strong>Prihvati</strong> — omogućavate i neophodne i analitičke kolačiće.</li>
<li><strong>Samo neophodni</strong> — koriste se isključivo kolačići neophodni za rad sajta.</li>
</ul>
<p>Vaš izbor se pamti lokalno u pregledaču, tako da se traka ne prikazuje ponovo dok tu informaciju ne obrišete.</p>

<h2>4. Kolačići trećih strana</h2>
<p>Google Analytics i Google Tag Manager su servisi kompanije Google LLC i podležu Google-ovim pravilima o privatnosti, dostupnim na <a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer">policies.google.com/privacy</a>. Podaci prikupljeni ovim servisima mogu se obrađivati na serverima izvan Republike Srbije.</p>

<h2>5. Kako da promenite ili povučete izbor</h2>
<p>Svoj izbor možete promeniti u bilo kom trenutku tako što ćete u podešavanjima pregledača obrisati podatke sajta (kolačiće i lokalno skladište) za <?= e($site['domen']) ?> — traka za kolačiće će se ponovo prikazati pri sledećoj poseti. Kolačiće možete kontrolisati i opštim podešavanjima pregledača (blokiranje, brisanje ili upozorenje pre postavljanja kolačića), s tim što to može uticati na funkcionisanje pojedinih delova sajta.</p>

<h2>6. Izmene ove politike</h2>
<p>Ova politika se može ažurirati radi usklađivanja sa izmenama propisa ili alata koje sajt koristi. Datum poslednje izmene: 17. avgust 2026.</p>

<h2>7. Kontakt</h2>
<p>Pitanja u vezi sa kolačićima možete poslati na <a href="mailto:<?= e($site['email']) ?>"><?= e($site['email']) ?></a> ili putem <a href="kontakt.php">kontakt forme</a>.</p>

</div></section>

<?php require __DIR__ . '/includes/footer.php'; ?>
