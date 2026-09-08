<?php
/**
 * inc/site.php — zentrale Fakten + kleine Helfer für alle Seiten.
 *
 * Alle Firmen- und Kontaktangaben betreffen ausschließlich die EstNor OÜ.
 * Quellen: estnor.ee (Impressum/Kontakt) und estnisches e-Äriregister
 * (ariregister.rik.ee, Registrikood 10706304), Stand 09/2026.
 *
 * Kein Framework, kein Build-Schritt: Diese Datei wird per require in jede
 * Seite eingebunden (siehe partials/head.php).
 */

$SITE = [
    'name'     => 'seriell-sanierung.de',
    'url'      => 'https://seriell-sanierung.de',
    'tagline'  => 'Vorgefertigte Fassadenelemente für die serielle Sanierung',

    // ── Hersteller / Betreiber: EstNor OÜ ────────────────────────────────
    'company' => [
        'legal_name'   => 'EstNor OÜ',
        'register_name' => 'OÜ EstNor',   // eingetragene Firmierung im e-Äriregister
        'founded'      => 2000,
        'street'       => 'Kurna tee 33',
        'zip_city'     => '75401 Kiili',
        'region'       => 'Harju maakond, Estland',
        'reg_code'     => '10706304',        // Registrikood (e-Äriregister)
        'vat_id'       => 'EE100650305',     // KMKR nr. / USt-IdNr.
        'ceo'          => 'Renee Mikomägi',  // Juhatuse liige / Geschäftsführer
    ],

    // ── Kontakt: EstNor OÜ ──────────────────────────────────────────────
    'contact' => [
        'email'      => 'info@estnor.ee',
        'phone'      => '+372 651 6174',
        'phone_href' => '+3726516174',
        'fax'        => '+372 651 6074',
        // Empfängeradresse des Kontaktformulars:
        'form_to'    => 'info@estnor.ee',
    ],

    'social' => [
        'linkedin' => 'https://ee.linkedin.com/company/estnor',
        'facebook' => 'https://www.facebook.com/estnor/',
    ],

    // ── Kennzahlen (EstNor OÜ, Quelle estnor.ee) ─────────────────────────
    'stats' => [
        ['25 Jahre', 'Erfahrung im vorgefertigten Holzelementbau'],
        ['1.000+',   'gebaute Wohneinheiten'],
        ['~10.000 m²', 'Produktionsfläche pro Jahr'],
        ['90 %',     'Exportanteil (u. a. Norwegen, Schweden, DACH)'],
    ],

    // ── Navigation (Reihenfolge; Beschriftungen in lang/*.php unter 'nav') ─
    'nav' => [
        'index.php',
        'serielle-sanierung.php',
        'fassadenelemente.php',
        'ueber-uns.php',
        'referenzen.php',
        'kontakt.php',
    ],
];

/**
 * e() — HTML-escape Kurzform für Ausgaben.
 */
function e(?string $s): string {
    return htmlspecialchars($s ?? '', ENT_QUOTES, 'UTF-8');
}

/**
 * nav_active() — 'aria-current="page"' für den aktuellen Menüpunkt.
 * $slug wird oben in jeder Seite gesetzt (z. B. $slug = 'kontakt.php').
 */
function nav_active(string $href, string $current): string {
    return $href === $current ? ' aria-current="page"' : '';
}
