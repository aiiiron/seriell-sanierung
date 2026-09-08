<?php
/**
 * partials/head.php — <head> + Seitenkopf.
 *
 * Vor dem require in jeder Seite setzen:
 *   $slug        z. B. 'kontakt.php'  (Dateiname, für Navi-Markierung + canonical)
 *   $page_title  Seitentitel ohne " | seriell-sanierung.de"
 *   $page_desc   Meta-Description (1–2 Sätze)
 */
require_once __DIR__ . '/../inc/site.php';

$slug       = $slug       ?? 'index.php';
$page_title = $page_title ?? $SITE['tagline'];
$page_desc  = $page_desc  ?? 'EstNor fertigt vorgefertigte Fassadenelemente für die serielle Sanierung von Mehrfamilienhäusern und liefert sie nach Deutschland.';
$canonical  = rtrim($SITE['url'], '/') . '/' . ($slug === 'index.php' ? '' : $slug);
$asset_v    = '20260908b'; // bei CSS-Änderungen hochzählen (Cache-Buster)
?><!doctype html>
<html lang="de">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= e($page_title) ?> | <?= e($SITE['name']) ?></title>
  <meta name="description" content="<?= e($page_desc) ?>">
  <link rel="canonical" href="<?= e($canonical) ?>">

  <meta property="og:type" content="website">
  <meta property="og:site_name" content="<?= e($SITE['name']) ?>">
  <meta property="og:title" content="<?= e($page_title) ?>">
  <meta property="og:description" content="<?= e($page_desc) ?>">
  <meta property="og:url" content="<?= e($canonical) ?>">
  <meta property="og:locale" content="de_DE">
  <meta name="theme-color" content="#14352a">

  <link rel="icon" type="image/svg+xml" href="/assets/favicon.svg">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,500;12..96,600;12..96,700&family=Inter:wght@400;500;600&display=swap">
  <link rel="stylesheet" href="/assets/style.css?v=<?= $asset_v ?>">
</head>
<body>
<a class="skip-link" href="#main">Zum Inhalt springen</a>
<?php require __DIR__ . '/header.php'; ?>
<main id="main">
