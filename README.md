# seriell-sanierung.de

Turundusleht EstNori (Estnor OÜ) tehases toodetud **eelmontaažis
fassaadielementidele** Saksamaa korterelamute **seeria­saneerimise**
(*serielle Sanierung*) turul. Sihtrühm: Saksa ehitus-, saneerimis- ja
elamumajandusettevõtted, kes pakuvad või hakkavad pakkuma seeria­saneerimist.

Keel: **saksa keel** (kogu kasutajale nähtav tekst). Koodikommentaarid on
saksa/eesti segamini — järgi faili, mida muudad.

---

## Tehnika

- **Puhas PHP**, ilma raamistiku ja ilma Composerita — täpselt nagu Ajaraamat.
- **Ei ole build-sammu.** Server serveerib failid nii nagu nad on.
- Ühine päis/jalus on `partials/`-kaustas ja tõmmatakse igasse lehte
  `require`-ga sisse, nii et neid muudad ühes kohas.
- Kontaktivorm kasutab PHP `mail()`-funktsiooni (Hostingeris tavaliselt olemas).

## Kaustad ja failid

```
.
├── index.php                Avaleht
├── serielle-sanierung.php   "Mis on seeriasanEErimine" — selgituslehekülg
├── fassadenelemente.php     Toode: elemendi ülesehitus, montaaž, logistika
├── ueber-uns.php            EstNori tutvustus + arvud
├── referenzen.php           Referentsprojektid (andmed: inc/projects.php)
├── kontakt.php              Kontakt + vormi töötleja (PHP mail())
├── impressum.php            Impressum (§5 DDG) — SISALDAB PLATZHALTEREID
├── datenschutz.php          Andmekaitse (DSGVO) — SISALDAB PLATZHALTEREID
├── 404.php                  Vealehekülg
├── partials/
│   ├── head.php             <head> + päis; enne require't sea $slug/$page_title/$page_desc
│   ├── header.php           EstNori logo + tekst + keelelüliti + navigatsioon
│   ├── footer.php           Jalus + mobiilimenüü-skript + </body>
│   └── project-card.php     Üks referentskaart (ootab muutujat $p)
├── inc/
│   ├── site.php             Firma- ja kontaktandmed (ainult EstNor OÜ) + abifunktsioonid
│   ├── i18n.php             Kahe keele tugi: t(), ta(), t_nav(), lang_url()
│   └── projects.php         Referentsprojektide struktuur (tekstid: lang/*.php)
├── lang/
│   ├── de.php               Saksakeelsed tekstid (vaikekeel)
│   └── en.php               Ingliskeelsed tekstid
├── media/
│   └── estnor-logo-rgb.png  EstNori logo (päises)
├── assets/
│   ├── style.css            Üks stiilifail (disainižetoonid + komponendid)
│   └── favicon.svg
├── .htaccess                HTTPS, www->non-www, ilusad URL-id, 404, cache
├── robots.txt  ·  sitemap.xml
└── .github/workflows/deploy.yml   FTP-juurutus pushi peale
```

## Keeled (DE / EN)

Kogu tekst on failides `lang/de.php` (saksa, vaikekeel) ja `lang/en.php`
(inglise). Šablloonid ei sisalda kõva teksti, vaid kutseid `t('võti')` /
`ta('võti')`. Külastaja valib keele päises oleva **DE / EN** lülitiga; valik
salvestub küpsisesse (`?lang=en` URL-is on vaja ainult ühe korra).

**Teksti muutmine:** muuda vastavat väärtust `lang/de.php`-s JA `lang/en.php`-s
(sama võti). **Uus tekstiplokk:** lisa võti mõlemasse faili, siis kasuta
šabloonis `<?= t('...') ?>`. Kui EN võti puudub, kuvatakse DE tekst (varuvariant).

---

## Kohalik eelvaade

Vaja on PHP-d (`php -v`). Kui pole:

```bash
brew install php
```

Seejärel projekti kaustast:

```bash
php -S localhost:8000
```

Ava <http://localhost:8000>. Muudatused failides on kohe nähtavad
(lehe värskendamisel). Kontaktivormi `mail()` kohalikult tavaliselt kirja
ära ei saada — see on ootuspärane, serveris töötab.

---

## Kuidas seda lehte uuendada (nagu Ajaraamatut)

See kaust on git-repositoorium. **Iga `git push` `main`-harusse laeb failid
automaatselt FTP kaudu serverisse** (GitHub Actions, `.github/workflows/deploy.yml`).

**Esmane seadistus (üks kord):**

1. Loo GitHubis privaatne repo ja seo see selle kaustaga:
   ```bash
   git remote add origin git@github.com:KASUTAJA/seriell-sanierung.git
   git branch -M main
   git push -u origin main
   ```
2. Lisa repo seadetes **Settings → Secrets and variables → Actions** neli
   saladust selle domeeni **eraldi Hostingeri konto** FTP-andmetega:
   - `FTP_SERVER` — nt `ftp.seriell-sanierung.de` või Hostingeri antud host
   - `FTP_USERNAME` — selle konto FTP-kasutaja
   - `FTP_PASSWORD` — FTP-parool
   - `FTP_SERVER_DIR` — sihtkaust, kaldkriipsuga lõpus, nt `/public_html/`
   FTP-andmed leiad hPanelist: **Files → FTP Accounts**.
3. Kontrolli, et domeen `seriell-sanierung.de` osutab selle Hostingeri
   konto peale ja et SSL-sertifikaat on aktiivne (hPanel → SSL).

**Edaspidi:** muuda faile (ise või Claude'iga), siis:

```bash
git add -A && git commit -m "Sisu: ..." && git push
```

Juurutuse käiku näed GitHubis vahekaardil **Actions**. `.github/` ja `*.md`
serverisse ei lähe (vt `exclude` workflow-failis).

> **Domeeniga GitHub Pages ei kasutata** — leht jookseb PHP peal Sinu enda
> hostingus, GitHub teeb ainult FTP-üleslaadimise.

---

## Enne avalikuks tegemist — palun üle vaadata

**Kõik firma- ja kontaktandmed** on ainult EstNor OÜ kohta ja koondatud
`inc/site.php`-sse (nimi, aadress, registrikood 10706304, KMKR EE100650305,
juhatuse liige Renee Mikomägi, e-post/telefon). Allikad: estnor.ee ja
estnisese e-Äriregistri kanne. Kui midagi neist muutub, muuda ainult
`inc/site.php`-d.

Veel üle vaadata:

- **`impressum.php`** — koostatud §5 DDG / §18 MStV standardstruktuuri järgi,
  Diensteanbieter = EstNor OÜ. **Ei ole õigusnõustamine** — lase Saksa
  TMG/DDG/DSGVO-d tundval juristil üle vaadata.
- **`datenschutz.php`** — tegelik **hosting** (serveri asukoht, AVL/Art. 28),
  logide säilitusaeg, andmekaitseametniku vajadus, Google Fonts vs. lokaalsed
  fondid, analüütika. Vastutav asutus on juba EstNor OÜ.
- **Google Fonts** — praegu laetakse fondid Google'i serverist
  (`partials/head.php`). Andmekaitse­sõbralikum on fondifailid ise serverisse
  panna ja väline link eemaldada.
- **Kontaktivorm** — kontrolli, et `mail()` päriselt saadab (SPF/DKIM
  domeenile). Vajadusel vaheta SMTP- või vormiteenuse vastu.
- **Referentsid** (`inc/projects.php`) — KredEx ja Loodusmaja andmed pärinevad
  estnor.ee-lt (09/2026). Pildid on skeemid, mitte fotod — lisa päris fotod,
  kui olemas (`partials/project-card.php`).
- **Fassadenelemente** — Saksamaal kasutamiseks vajalikud ehitus­õiguslikud
  tõendid (abZ/aBG, tuletõkkeklass) EstNoriga kokku leppida.

---

## Sisu allikad

EstNori andmed: [estnor.ee](https://estnor.ee/en/) ·
[estnor.ee/en/serial-renovation](https://estnor.ee/en/serial-renovation/) ·
[estnor.ee/en/about-us](https://www.estnor.ee/en/about-us/).
Turu/terminoloogia taust: energiesprong.de, buo.de, ecoworks.tech,
seeria-renova.de.
