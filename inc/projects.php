<?php
/**
 * inc/projects.php — serial-renovation reference buildings, all in Estonia.
 *
 * Source: EstNor's own "Serial Renovation → References" page
 * (voolaid.eu/estnor-new/en/serial-renovation/, References section,
 * Sept 2026) and the before/after photos supplied there. Same order as
 * that page — most recent project first.
 *
 * Each entry needs a before/after photo at
 *   media/references/<slug>.jpg  and  media/references/<slug>.webp
 * (~900×376, see media/references/). 'place' is the town only; the
 * country ("Estland"/"Estonia") is added by the template via t().
 */

$PROJECTS = [
    ['slug' => 'kooli-5-sindi',         'name' => 'Kooli 5',       'place' => 'Sindi'],
    ['slug' => 'kotka-8-tallinn',       'name' => 'Kotka 8',       'place' => 'Tallinn'],
    ['slug' => 'muldvalge-1-tallinn',   'name' => 'Muldvalge 1',   'place' => 'Tallinn'],
    ['slug' => 'nisu-3-tallinn',        'name' => 'Nisu 3',        'place' => 'Tallinn'],
    ['slug' => 'pallasti-10-tallinn',   'name' => 'Pallasti 10',   'place' => 'Tallinn'],
    ['slug' => 'parnu-mnt-133-tallinn', 'name' => 'Pärnu mnt 133', 'place' => 'Tallinn'],
    ['slug' => 'riia-80-parnu',         'name' => 'Riia 80',       'place' => 'Pärnu'],
    ['slug' => 'turu-15-tartu',         'name' => 'Turu 15',       'place' => 'Tartu'],
    ['slug' => 'ojasoo-6-kuressaare',   'name' => 'Ojasoo 6',      'place' => 'Kuressaare'],
    ['slug' => 'anne-2-tartu',          'name' => 'Anne 2',        'place' => 'Tartu'],
    ['slug' => 'lasteaia-2-kehtna',     'name' => 'Lasteaia 2',    'place' => 'Kehtna'],
    ['slug' => 'tule-4-saue',           'name' => 'Tule 4',        'place' => 'Saue'],
];
