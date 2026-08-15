# PHP verzija sajta

Ova verzija koristi HTML5, CSS3, PHP i JavaScript. Sve stranice dele isti header i footer.

## Gde se šta menja

- `includes/config.php` — naziv udruženja, imejl, lokacija i status
- `includes/header.php` — zaglavlje, glavni meni i mobilni meni
- `includes/footer.php` — footer, kontakt podaci i pravni linkovi
- `assets/css/style.css` — kompletan izgled sajta
- `assets/js/main.js` — mobilni meni, FAQ, kolačići i demo forme
- pojedinačne `.php` stranice — sadržaj svake stranice

## Lokalno pokretanje

Potreban je PHP 7.4 ili noviji. U direktorijumu sajta pokrenite:

```bash
php -S localhost:8000
```

Zatim otvorite `http://localhost:8000`.

## Hosting

PHP se izvršava na klasičnom hostingu sa PHP podrškom. GitHub Pages ne izvršava PHP kod, pa je za objavljivanje potrebno koristiti cPanel/Plesk hosting ili drugi PHP server.

Postojeće HTML stranice su sačuvane kao rezervna verzija. Na Apache hostingu `.htaccess` daje prednost `index.php` stranici.
