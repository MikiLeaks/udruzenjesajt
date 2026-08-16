MIKILIKS VEB RAZVOJ - SAJT (dorađena verzija)

Ovo je dorada prototipa koji je pripremljen u prethodnom krugu (ChatGPT + Claude).
Struktura, dizajn i skoro sav sadržaj su zadržani - Claude je proverio ceo sajt
naspram teksta Statuta i ispravio mesta gde su postojali izmišljeni podaci.

NAPOMENA O VERZIJI: sajt je prebačen sa statičkog HTML-a na PHP - zaglavlje i futer
se sada nalaze na jednom mestu (includes/header.php i includes/footer.php), a svi
podaci i meniji u includes/config.php. Stranice imaju nastavak .php umesto .html.
Detaljno uputstvo je u README.md.

SADRŽAJ PAKETA:
- Višestranični responsivni HTML5/CSS3/JS/PHP sajt (15 stranica + 404)
- Početna, O nama, Dokumenta, Projekti, Edukacije, Vesti, Članstvo, Donacije, Kontakt
- Dodatne stranice: besplatni materijali, portfolio, blog, privatnost, kolačići,
  uslovi korišćenja, 404
- Statut u PDF i originalnom DOC formatu (documents/)
- Kontakt i članska forma u demo režimu (main.js, bez pravog slanja)
- robots.txt

ŠTA JE CLAUDE ISPRAVIO U OVOJ VERZIJI:
1. Uklonjeni izmišljeni podaci koji su bili prikazani kao stvarni na SVIH 15 strana:
   - Adresa "Kralja Milana IV 13/21, Kragujevac" -> zamenjeno sa "Kragujevac, Srbija"
     (Statut potvrđuje samo grad, ne i ulicu).
   - Telefon "066 907 9557" -> potpuno uklonjen (bio je nepostojeći/nasumičan broj).
   - Email domen "info@udruzenje-mikiliks-veb-razvoj.rs" -> zamenjen očiglednim
     placeholder-om "info@vas-domen.rs" dok ne registrujete pravi domen.
2. PIB (109243073) i matični broj (28185685) na stranicama Kontakt i Donacije bili
   su potpuno izmišljeni brojevi prikazani bez ikakvog upozorenja - zamenjeni su
   sa "[unesite PIB]" / "[unesite matični broj]" + upozorenje administratoru.
3. Izmišljen datum osnivanja "1. oktobar 2015." (Početna + O nama) i nepostojeća
   "2024. Promena identiteta" prekretnica -> uklonjeni; vremenska linija sada ima
   samo ono što Statut zaista potvrđuje (usvajanje Statuta 01.06.2026), plus
   placeholder za pravi datum osnivanja.
4. Na stranici "O nama", Milan Nedeljković je bio predstavljen kao "Zastupnik
   Udruženja" - Statut ga izričito pominje samo kao "Predsedavajućeg skupštine"
   koji je potpisao dokument. Tekst je ublažen da odražava samo ono što je
   potvrđeno, uz napomenu da proverite da li je on i zvanično izabrani Zastupnik.
5. Dodata jedinstvena meta description po stranici (bilo je identično na svih 15).
6. Dodati robots.txt i 404.php.

VAŽNO PRE OBJAVLJIVANJA (i dalje):
1. Popuniti sve placeholdere obeležene sa [unesite ...] - PIB, matični broj,
   tačan datum osnivanja, i dodati broj telefona ako želite da bude javan.
2. Registrovati pravi domen i zameniti "vas-domen.rs" svuda (samo par mesta:
   email adresa u topbar-u/footeru/kontakt.php i robots.txt).
3. Uneti broj računa na stranici Donacije.
4. Dodati APR rešenje, godišnja i finansijska izveštaje (dokumenta.php).
5. Zameniti primere projekata, vesti, partnera i galerije stvarnim sadržajem.
6. Povezati forme sa pravim servisom za slanje e-pošte (npr. Formspree, Contact
   Form 7/Fluent Forms ako se prebaci na WordPress, ili sopstveni SMTP/backend) -
   trenutno forme samo prikazuju demo poruku i ništa ne šalju.
7. NERAZREŠENO PRAVNO PITANJE: Statut u članu 8. navodi da su organi Udruženja
   samo Skupština i zastupnik, dok se u članovima 5. i 6. pominje "Upravni odbor"
   koji nigde nije definisan kao organ. Ovo je nedoslednost u samom tekstu
   Statuta (ne u sajtu) - preporučuje se da to razjasnite sa advokatom ili pri
   APR registraciji pre nego što Upravni odbor prikažete na sajtu kao organ.

DIZAJN:
Prototip inspirisan rasporedom referentne Tanda teme: plava paleta, svetle
pozadine, veliki hero, kartice usluga, proces, projekti, statistika, vesti,
FAQ i tamni footer. Nisu kopirani originalni tekstovi ni grafički materijali
teme.

WORDPRESS / ELEMENTOR:
Svaka HTML sekcija (u .php fajlovima) može se preneti u Elementor kao Container/Flexbox sekcija.
Globalne boje su definisane na početku assets/css/style.css.
