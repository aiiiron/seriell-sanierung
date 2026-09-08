<?php
/**
 * inc/site.php — zentrale Fakten + kleine Helfer für alle Seiten.
 *
 * Werte mit  ✅  stammen von EstNors eigener Website (estnor.ee, Stand 09/2026).
 * Werte mit  ⚠️  sind Platzhalter und müssen vor dem Livegang geprüft/ergänzt
 * werden — im Projekt einfach nach "PLATZHALTER" suchen.
 *
 * Kein Framework, kein Build-Schritt: Diese Datei wird per require in jede
 * Seite eingebunden (siehe partials/head.php).
 */

$SITE = [
    'name'     => 'seriell-sanierung.de',
    'url'      => 'https://seriell-sanierung.de',
    'tagline'  => 'Vorgefertigte Fassadenelemente für die serielle Sanierung',

    // ── Hersteller ────────────────────────────────────────────────────────
    'company' => [
        'legal_name' => 'Estnor OÜ',                 // ✅
        'founded'    => 2000,                         // ✅
        'street'     => 'Kurna tee 33',              // ✅
        'zip_city'   => '75401 Kiili alevik',        // ✅
        'region'     => 'Harjumaa, Estland',         // ✅
        'reg_code'   => '[PLATZHALTER: Registrikood / Handelsregister-Nr.]',   // ⚠️
        'vat_id'     => '[PLATZHALTER: KMKR / USt-IdNr.]',                     // ⚠️
        'ceo'        => '[PLATZHALTER: Geschäftsführer:in]',                   // ⚠️
    ],

    // ── Kontakt ──────────────────────────────────────────────────────────
    'contact' => [
        'email'      => 'info@estnor.ee',            // ✅
        'phone'      => '+372 651 6174',             // ✅
        'phone_href' => '+3726516174',               // ✅
        // Eigene deutschsprachige Ansprechperson / Adresse, falls vorhanden:
        'de_note'    => '[PLATZHALTER: dt. Ansprechpartner:in / ggf. eigene E-Mail + Telefon]', // ⚠️
        // Empfängeradresse des Kontaktformulars (Standard: E-Mail oben):
        'form_to'    => 'info@estnor.ee',            // ⚠️ ggf. auf Vertriebsadresse ändern
    ],

    'social' => [
        'linkedin' => 'https://ee.linkedin.com/company/estnor',  // ✅
        'facebook' => 'https://www.facebook.com/estnor/',        // ✅
    ],

    // ── Kennzahlen (alle ✅ von estnor.ee) ────────────────────────────────
    'stats' => [
        ['25 Jahre', 'Erfahrung im vorgefertigten Holzelementbau'],
        ['1.000+',   'gebaute Wohneinheiten'],
        ['~10.000 m²', 'Produktionsfläche pro Jahr'],
        ['90 %',     'Exportanteil (u. a. Norwegen, Schweden, DACH)'],
    ],

    // ── Navigation ───────────────────────────────────────────────────────
    'nav' => [
        'index.php'               => 'Start',
        'serielle-sanierung.php'  => 'Serielle Sanierung',
        'fassadenelemente.php'    => 'Fassadenelemente',
        'ueber-uns.php'           => 'Über EstNor',
        'referenzen.php'          => 'Referenzen',
        'kontakt.php'             => 'Kontakt',
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
