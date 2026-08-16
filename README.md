# udruzenjesajt

Sajt Udruženja „Mikiliks veb razvoja“ — HTML5, CSS3, JavaScript i PHP.

Zaglavlje (header) i podnožje (footer) postoje **samo na jednom mestu** i uključuju se
u svaku stranicu, pa se izmena radi jednom i vidi se na celom sajtu.

## Struktura

```
includes/
  config.php     <- SVA podešavanja: naziv, e-mail, grad, meni, linkovi u futeru
  header.php     <- topbar + logo + meni + mobilni meni (zajedničko za sve strane)
  footer.php     <- futer + kolačić traka + <script> (zajedničko za sve strane)
assets/
  css/style.css  <- sav dizajn (CSS3, promenljive boja na vrhu fajla)
  js/main.js     <- sav JavaScript (meni, FAQ, kolačići, forme)
  img/           <- logo i SVG ilustracije
documents/       <- Statut (PDF i DOC)
index.php, o-nama.php, projekti.php, ... , 404.php   <- pojedinačne stranice
.htaccess        <- 404 stranica, UTF-8, zaštita foldera includes/
```

## Kako izgleda jedna stranica

```php
<?php
$page_title       = 'O nama';
$page_description = 'Kratak opis stranice za Google.';
require __DIR__ . '/includes/header.php';
?>

<!-- ovde ide samo sadržaj te stranice -->

<?php require __DIR__ . '/includes/footer.php'; ?>
```

## Najčešće izmene

| Šta menjate | Gde |
|---|---|
| E-mail, grad, naziv udruženja | `includes/config.php` → niz `$site` |
| Stavke glavnog menija | `includes/config.php` → niz `$meni` |
| Linkove u futeru | `includes/config.php` → `$footer_kolone`, `$footer_pravno` |
| Izgled zaglavlja | `includes/header.php` |
| Izgled futera | `includes/footer.php` |
| Boje i tipografiju | `assets/css/style.css` (promenljive na vrhu) |
| Ponašanje (meni, FAQ, forme) | `assets/js/main.js` |
| Tekst pojedinačne strane | odgovarajući `*.php` fajl |

Nova stranica se dodaje tako što se kopira postojeći `*.php` fajl, promeni sadržaj i,
ako treba da se pojavi u meniju, doda red u `$meni` u `config.php`. Aktivna stavka
menija se označava automatski — ne mora ručno da se dodaje `class="active"`.

## Pokretanje lokalno

```bash
php -S localhost:8000
```
pa otvorite `http://localhost:8000`.

## Hosting

Potreban je hosting sa PHP-om (PHP 7.4+, testirano na 8.4) — Apache, LiteSpeed ili Nginx.
GitHub Pages ne izvršava PHP, pa se ova verzija tamo ne može objaviti; za GitHub Pages
bi bila potrebna statička (HTML) verzija.

## Napomene

Forme (kontakt, članstvo, prijave) i dalje rade u demo režimu preko JavaScript-a i ne
šalju e-poštu. Za stvarno slanje treba dodati PHP obradu forme ili spoljni servis —
detalji i ostale stavke pre objavljivanja su u `README.txt`.
