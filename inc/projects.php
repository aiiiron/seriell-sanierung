<?php
/**
 * inc/projects.php — Referenzprojekte.
 *
 * Neue Referenz hinzufügen: einen weiteren Block ans Array anhängen.
 * 'fig' (1–4) wählt eine der schematischen Illustrationen in
 * partials/project-card.php. Sobald echte Projektfotos vorliegen, kann dort
 * statt der SVG ein <img> eingesetzt werden.
 *
 * Angaben zu KredEx / Loodusmaja stammen von estnor.ee (Stand 09/2026).
 */

$PROJECTS = [
    [
        'title' => 'KredEx-Pilotprogramm für serielle Sanierung',
        'meta'  => 'Estland · 2022–2027',
        'tags'  => ['Fassadenelemente', 'Pilotprogramm', 'Im bewohnten Zustand'],
        'body'  => 'Staatliches Pilotprogramm zur werkseitigen Sanierung von Wohngebäuden.
                    EstNor war der erste teilnehmende Elementhersteller und lieferte das
                    größte Volumen an Fassadenelementen im Programm.',
        'stats' => [['12', 'Mehrfamilienhäuser'], ['1.', 'teilnehmender Hersteller']],
        'fig'   => 1,
        'upcoming' => false,
    ],
    [
        'title' => 'Loodusmaja – Umwelthaus Tallinn',
        'meta'  => 'Tallinn, Estland',
        'tags'  => ['Fassaden- & Dachelemente', 'Vormontierte Fenster', 'Holzbau'],
        'body'  => 'Für eines der größten Holzgebäude Estlands liefert EstNor rund
                    8.000 m² vorgefertigte Fassaden- und Dachelemente – inklusive
                    im Werk eingebauter Fenster.',
        'stats' => [['~8.000 m²', 'Elementfläche'], ['Werk', 'Fenstereinbau']],
        'fig'   => 2,
        'upcoming' => false,
    ],
    [
        'title' => 'Erste Projekte in Deutschland',
        'meta'  => 'Deutschland · in Vorbereitung',
        'tags'  => ['Partnersuche', 'Mehrfamilienhaus', '1950–1979'],
        'body'  => 'EstNor baut die Fertigungskapazität gezielt für den deutschen Markt
                    aus und sucht Bau-, Sanierungs- und Wohnungsunternehmen für erste
                    serielle Fassadenprojekte. Ihr Projekt kann hier stehen.',
        'stats' => [],
        'fig'   => 3,
        'upcoming' => true,
    ],
];
