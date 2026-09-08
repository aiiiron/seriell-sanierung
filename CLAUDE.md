# seriell-sanierung.de

Marketing site for **EstNor** (Estnor OÜ) prefabricated facade elements, aimed at
the **German serial-renovation** (*serielle Sanierung*) market: construction,
renovation and housing companies that do or want to do serial facade renovation.

User-facing text is **German (default) + English**, all in `lang/de.php` /
`lang/en.php`. Code comments are German/Estonian mixed — match the file you edit.

## Stack

- **Plain PHP**, no framework, no Composer, **no build step**. The host runs the
  `.php` files as-is (same model as the sibling project *Ajaraamat*).
- Shared markup lives in `partials/` and is pulled in with `require`.
- Two-language layer in `inc/i18n.php` + `lang/*.php` (cookie-based `?lang=`).
- One stylesheet: `assets/style.css` (design tokens + components).
- Contact form = PHP `mail()` in `kontakt.php` (honeypot + validation, no DB).

## Layout

- `inc/site.php` — company/contact facts as `$SITE[...]` (EstNor OÜ only), plus
  `e()` (escape) and `nav_active()`. `$SITE['nav']` is now just an ordered list
  of page files; labels live in `lang/*.php` under `nav`.
- `inc/i18n.php` — DE/EN support: `t('a.b.c')` string, `ta('a.b')` list,
  `t_nav('file.php')` menu label, `lang_url('en')` switcher href. Language from
  `?lang=xx` (→ cookie) → cookie → `de`. Must be required **before any output**
  (each page's first line; `head.php` also require_once's it).
- `lang/de.php` / `lang/en.php` — every user-facing string, nested by page.
  Values may contain inline HTML (`<b>`, `<a>`, `&amp;`) → echo raw with
  `<?= t(...) ?>`; only `e()` in attribute/plain contexts (title, meta, alt).
- `inc/projects.php` — `$PROJECTS` structure only (`key`, `fig`, `upcoming`);
  project text is in `lang/*.php` under `projects.<key>`.
- `partials/head.php` — `<head>` (dynamic `<html lang>`, hreflang alternates) +
  opens `<body>`, then `require`s `header.php`. Pages set `$slug`,
  `$page_title = t('meta.<x>.title')`, `$page_desc` before requiring it.
  Bump `$asset_v` when `style.css` changes (cache-buster).
- `partials/header.php` — EstNor logo (`/media/estnor-logo-rgb.png`) + caption
  + DE/EN `.lang-switch` + nav. `partials/footer.php` closes out.
- `partials/project-card.php` — one card; expects `$p` (a `$PROJECTS` entry).
- Pages: `index.php`, `serielle-sanierung.php`, `fassadenelemente.php`,
  `ueber-uns.php`, `referenzen.php`, `kontakt.php`, `impressum.php`,
  `datenschutz.php`, `404.php`.
- `.htaccess` — force HTTPS, `www`→non-`www`, pretty URLs, 404, gzip + cache.

## Conventions

- Text comes from `t()`/`ta()`. Add/change a string in **both** `lang/de.php`
  and `lang/en.php` under the same key. Missing EN key → DE fallback.
- Output `t()` raw; `e()` only for attributes/plain text and `$_POST` data.
- Internal links use the real `.php` path; the cookie keeps the language, so
  links don't need `?lang=`.
- New page: copy an existing page's header, add the file to `$SITE['nav']`
  (order) + `nav` labels in both lang files + `meta.<x>` + `sitemap.xml`.
- New reference: add a block to `$PROJECTS` + a `projects.<key>` entry in both
  lang files.
- Facts about EstNor come from estnor.ee / the Estonian e-Business Register —
  don't invent figures.

## Local preview

```bash
php -S localhost:8000        # needs: brew install php
```

## Deploy

Push to `main` → `.github/workflows/deploy.yml` FTP-uploads to the host
(secrets `FTP_SERVER`, `FTP_USERNAME`, `FTP_PASSWORD`, `FTP_SERVER_DIR`).
No GitHub Pages — the site runs on PHP hosting (separate Hostinger account
from Ajaraamat). `.github/**` and `*.md` are not uploaded.

## Company / contact identity

All company and contact info is **EstNor OÜ** only, centralised in
`inc/site.php` (name, address `Kurna tee 33, 75401 Kiili`, Registrikood
`10706304`, VAT `EE100650305`, board member `Renee Mikomägi`, `info@estnor.ee`,
`+372 651 6174`). Sources: estnor.ee + Estonian e-Äriregister. No German GmbH,
no separate "German contact person" — don't reintroduce one. If a fact
changes, edit only `inc/site.php`.

## Before go-live

- `impressum.php` / `datenschutz.php` — drafted to §5 DDG / §18 MStV / DSGVO
  structure, Diensteanbieter/verantwortliche Stelle = EstNor OÜ. **Not legal
  advice** — have a lawyer review.
- `datenschutz.php` still needs: real hosting details (server location,
  Art. 28 AVV), log-retention period, DPO assessment, Google Fonts vs.
  self-hosted.
- German building-approval evidence for the elements (abZ/aBG, Brandschutz).
- Real project photos for `inc/projects.php` (currently schematic SVGs).
