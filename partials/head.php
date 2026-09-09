<?php
/**
 * partials/head.php — <head> + Seitenkopf.
 *
 * Vor dem require in jeder Seite setzen:
 *   $slug        z. B. 'kontakt.php'  (Dateiname, für Navi-Markierung + canonical)
 *   $page_title  Seitentitel ohne " | seriell-sanierung.de"  (i. d. R. via t())
 *   $page_desc   Meta-Description                              (i. d. R. via t())
 *
 * inc/i18n.php wird hier (spätestens) eingebunden; besser bereits als erste
 * Zeile der Seite, damit das Sprach-Cookie sicher vor jeder Ausgabe gesetzt wird.
 */
require_once __DIR__ . '/../inc/site.php';
require_once __DIR__ . '/../inc/i18n.php';

$slug       = $slug       ?? 'index.php';
$page_title = $page_title ?? t('meta.home.title');
$page_desc  = $page_desc  ?? t('meta.home.desc');
$path_only  = rtrim($SITE['url'], '/') . '/' . ($slug === 'index.php' || $slug === '' ? '' : $slug);
$canonical  = $path_only . ($LANG === $LANG_DEFAULT ? '' : '?lang=' . $LANG);
$asset_v    = '20260909c'; // bei CSS-Änderungen hochzählen (Cache-Buster)
?><!doctype html>
<html lang="<?= e($LANG) ?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= e($page_title) ?> | <?= e($SITE['name']) ?></title>
  <meta name="description" content="<?= e($page_desc) ?>">
  <link rel="canonical" href="<?= e($canonical) ?>">
<?php foreach ($LANGS as $lc => $ln): ?>
  <link rel="alternate" hreflang="<?= e($lc) ?>" href="<?= e($path_only . ($lc === $LANG_DEFAULT ? '' : '?lang=' . $lc)) ?>">
<?php endforeach; ?>
  <link rel="alternate" hreflang="x-default" href="<?= e($path_only) ?>">

  <meta property="og:type" content="website">
  <meta property="og:site_name" content="<?= e($SITE['name']) ?>">
  <meta property="og:title" content="<?= e($page_title) ?>">
  <meta property="og:description" content="<?= e($page_desc) ?>">
  <meta property="og:url" content="<?= e($canonical) ?>">
  <meta property="og:locale" content="<?= $LANG === 'de' ? 'de_DE' : 'en_GB' ?>">
  <meta name="theme-color" content="#14352a">

  <link rel="icon" type="image/svg+xml" href="/assets/favicon.svg">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,500;12..96,600;12..96,700&family=EB+Garamond:ital,wght@1,500&family=Inter:wght@400;500;600&display=swap">
  <link rel="preload" as="image" href="/media/hero.webp" type="image/webp">
  <link rel="stylesheet" href="/assets/style.css?v=<?= $asset_v ?>">
</head>
<body>
<a class="skip-link" href="#main"><?= e(t('common.skip')) ?></a>
<?php require __DIR__ . '/header.php'; ?>
<main id="main">
