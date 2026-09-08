<?php
/**
 * inc/i18n.php — schlanke Zwei-Sprachen-Unterstützung (DE / EN), kein Build.
 *
 * Sprache: ?lang=xx (wird in einem Cookie gemerkt) → sonst Cookie → sonst 'de'.
 * Muss VOR jeder Ausgabe eingebunden werden (setzt ggf. ein Cookie), daher
 * ganz oben in jeder Seite:  require_once __DIR__ . '/inc/i18n.php';
 *
 * Verwendung in Templates:
 *   <?= t('home.hero.title') ?>            einzelner String (darf HTML enthalten)
 *   <?php foreach (ta('ss.benefits') as $li): ?> ...   Liste/Array
 *   <?= e(t('meta.home.title')) ?>         in Attribute/Text: zusätzlich escapen
 */

$LANGS        = ['de' => 'Deutsch', 'en' => 'English'];
$LANG_DEFAULT = 'de';

function i18n_init(array $langs, string $default): string {
    $lang = $_COOKIE['lang'] ?? $default;
    if (isset($_GET['lang']) && array_key_exists($_GET['lang'], $langs)) {
        $lang = $_GET['lang'];
        if (!headers_sent()) {
            setcookie('lang', $lang, [
                'expires'  => time() + 31536000,
                'path'     => '/',
                'samesite' => 'Lax',
            ]);
        }
    }
    return array_key_exists($lang, $langs) ? $lang : $default;
}

$LANG  = i18n_init($LANGS, $LANG_DEFAULT);
$T     = require __DIR__ . "/../lang/{$LANG}.php";
$T_DEF = $LANG === $LANG_DEFAULT ? $T : require __DIR__ . "/../lang/{$LANG_DEFAULT}.php";

function _t_lookup($node, string $path) {
    foreach (explode('.', $path) as $seg) {
        if (!is_array($node) || !array_key_exists($seg, $node)) return null;
        $node = $node[$seg];
    }
    return $node;
}

/** Übersetzten String holen (Punktpfad). Fällt auf DE zurück, dann auf den Pfad. */
function t(string $path): string {
    $v = _t_lookup($GLOBALS['T'], $path);
    if (!is_string($v)) $v = _t_lookup($GLOBALS['T_DEF'], $path);
    return is_string($v) ? $v : $path;
}

/** Übersetzte Liste holen (für Aufzählungen, Karten, Schritte). */
function ta(string $path): array {
    $v = _t_lookup($GLOBALS['T'], $path);
    if (!is_array($v)) $v = _t_lookup($GLOBALS['T_DEF'], $path);
    return is_array($v) ? $v : [];
}

/** Navigations-Label für einen Dateinamen (Schlüssel enthält einen Punkt). */
function t_nav(string $file): string {
    return $GLOBALS['T']['nav'][$file] ?? $GLOBALS['T_DEF']['nav'][$file] ?? $file;
}

/** URL der aktuellen Seite mit gesetztem ?lang=CODE (für den Sprachumschalter). */
function lang_url(string $code): string {
    $uri  = $_SERVER['REQUEST_URI'] ?? '/';
    $path = parse_url($uri, PHP_URL_PATH) ?: '/';
    parse_str((string) parse_url($uri, PHP_URL_QUERY), $q);
    $q['lang'] = $code;
    return $path . '?' . http_build_query($q);
}
