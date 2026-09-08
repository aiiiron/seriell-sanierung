<?php
/**
 * inc/projects.php — Referenzprojekte (nur Struktur; Texte in lang/*.php
 * unter 'projects.<key>').
 *
 * Neue Referenz: hier einen Block ergänzen UND in lang/de.php + lang/en.php
 * unter 'projects' einen Eintrag mit title/meta/tags/body/stats anlegen.
 *
 * 'fig' (1–4) wählt eine schematische Illustration in partials/project-card.php.
 * 'upcoming' = geplantes/kein reales Projekt (derzeit nur informativ).
 */

$PROJECTS = [
    ['key' => 'kredex',     'fig' => 1, 'upcoming' => false],
    ['key' => 'loodusmaja', 'fig' => 2, 'upcoming' => false],
    ['key' => 'germany',    'fig' => 3, 'upcoming' => true],
];
