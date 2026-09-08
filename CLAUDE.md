# seriell-sanierung.de

Marketing site for **EstNor** (Estnor OÜ) prefabricated facade elements, aimed at
the **German serial-renovation** (*serielle Sanierung*) market: construction,
renovation and housing companies that do or want to do serial facade renovation.

All user-facing text is **German**. Code comments are German/Estonian mixed —
match the file you edit.

## Stack

- **Plain PHP**, no framework, no Composer, **no build step**. The host runs the
  `.php` files as-is (same model as the sibling project *Ajaraamat*).
- Shared markup lives in `partials/` and is pulled in with `require`.
- One stylesheet: `assets/style.css` (design tokens + components, ~450 lines).
- Contact form = PHP `mail()` in `kontakt.php` (honeypot + validation, no DB).

## Layout

- `inc/site.php` — **all** company/contact facts as `$SITE[...]`, plus `e()`
  (escape) and `nav_active()`. Every ⚠️ PLATZHALTER on the site is defined here.
- `inc/projects.php` — `$PROJECTS` array for the reference gallery.
- `partials/head.php` — `<head>` + opens `<body>`, then `require`s `header.php`.
  Each page sets `$slug`, `$page_title`, `$page_desc` **before** requiring it.
  Bump `$asset_v` when `style.css` changes (cache-buster).
- `partials/footer.php` — closes `<main>`, footer, mobile-menu script, `</body>`.
- `partials/project-card.php` — one card; expects `$p` (an `$PROJECTS` entry).
- Pages: `index.php`, `serielle-sanierung.php`, `fassadenelemente.php`,
  `ueber-uns.php`, `referenzen.php`, `kontakt.php`, `impressum.php`,
  `datenschutz.php`, `404.php`.
- `.htaccess` — force HTTPS, `www`→non-`www`, pretty URLs (`/kontakt` →
  `/kontakt.php`), `ErrorDocument 404 /404.php`, gzip + cache headers.

## Conventions

- Always output dynamic text through `e()`.
- Internal links use the real `.php` path (`/kontakt.php`), home is `/`.
- New page: copy an existing page's 4-line header, add it to `$SITE['nav']` in
  `inc/site.php` (if it belongs in the menu) and to `sitemap.xml`.
- New reference: append a block to `$PROJECTS` in `inc/projects.php`.
- Facts about EstNor come from estnor.ee — don't invent figures. Anything not
  verifiable is a marked PLATZHALTER, not a guess.

## Local preview

```bash
php -S localhost:8000        # needs: brew install php
```

## Deploy

Push to `main` → `.github/workflows/deploy.yml` FTP-uploads to the host
(secrets `FTP_SERVER`, `FTP_USERNAME`, `FTP_PASSWORD`, `FTP_SERVER_DIR`).
No GitHub Pages — the site runs on PHP hosting (separate Hostinger account
from Ajaraamat). `.github/**` and `*.md` are not uploaded.

## Before go-live

Search the repo for `PLATZHALTER`. Key items: Impressum operating entity
(is it Estnor OÜ or a German GmbH?), register/VAT numbers, managing director,
German contact person, real hosting details in `datenschutz.php`, German-market
building-approval evidence for the elements, real project photos.
Impressum/Datenschutz are drafted to standard structure but are **not legal
advice** — have them reviewed.
