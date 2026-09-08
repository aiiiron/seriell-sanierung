<?php
/**
 * lang/de.php — deutsche Texte (Standardsprache).
 * Struktur spiegelt die Seiten. Werte dürfen einfaches HTML enthalten
 * (<b>, <br>, <a>). %s wird per sprintf() im Template ersetzt.
 */
return [

  'common' => [
    'brand_caption' => 'Fassadenelemente von EstNor',
    'skip'          => 'Zum Inhalt springen',
    'menu'          => 'Menü',
    'nav_aria'      => 'Hauptnavigation',
    'lang_aria'     => 'Sprache wählen',
    'cta_inquiry'   => 'Anfrage stellen',
    'cta_contact'   => 'Kontakt aufnehmen',
    'cta_project'   => 'Projekt anfragen',
    'stats' => [
      ['25 Jahre',   'Erfahrung im vorgefertigten Holzelementbau'],
      ['1.000+',     'gebaute Wohneinheiten'],
      ['~10.000 m²', 'Produktionsfläche pro Jahr'],
      ['90 %',       'Exportanteil (u. a. Norwegen, Schweden, DACH)'],
    ],
  ],

  'nav' => [
    'serielle-sanierung.php' => 'Serielle Sanierung',
    'fassadenelemente.php'   => 'Fassadenelemente',
    'ueber-uns.php'          => 'Über EstNor',
    'referenzen.php'         => 'Referenzen',
    'kontakt.php'            => 'Kontakt',
  ],

  'footer' => [
    'tagline'   => 'Vorgefertigte Fassaden- und Dachelemente für die serielle Sanierung von Mehrfamilienhäusern. Gefertigt von %s in Estland, montiert von Partnerbetrieben in Deutschland.',
    'h_topics'  => 'Themen',
    'h_contact' => 'Kontakt',
    'h_legal'   => 'Rechtliches',
    'impressum' => 'Impressum',
    'privacy'   => 'Datenschutz',
    'rights'    => 'Alle Rechte vorbehalten.',
    'source'    => 'Herstellerinformationen und Kennzahlen: estnor.ee',
  ],

  'meta' => [
    'home'    => ['title' => 'Vorgefertigte Fassadenelemente für die serielle Sanierung', 'desc' => 'EstNor fertigt gedämmte Fassaden- und Dachelemente mit vormontierten Fenstern für die serielle Sanierung von Mehrfamilienhäusern – und liefert sie nach Deutschland.'],
    'ss'      => ['title' => 'Was ist serielle Sanierung?', 'desc' => 'Serielle Sanierung erklärt: energetische Modernisierung von Mehrfamilienhäusern mit vorgefertigten Fassaden- und Dachelementen nach dem Energiesprong-Prinzip.'],
    'fe'      => ['title' => 'Fassadenelemente von EstNor', 'desc' => 'Aufbau, Vorfertigungsgrad und Montage der EstNor-Fassadenelemente: Holzrahmen, Dämmung, vormontierte Fenster, Lüftungsführung und fertige Fassadenoberfläche.'],
    'about'   => ['title' => 'Über EstNor', 'desc' => 'EstNor OÜ fertigt seit dem Jahr 2000 vorgefertigte Holzhäuser und Fassadenelemente im Werk in Kiili, Estland – überwiegend für den Export nach Nord- und Mitteleuropa.'],
    'ref'     => ['title' => 'Referenzen', 'desc' => 'Referenzprojekte von EstNor für vorgefertigte Fassaden- und Dachelemente – darunter das estnische KredEx-Pilotprogramm für serielle Sanierung und das Umwelthaus Loodusmaja in Tallinn.'],
    'contact' => ['title' => 'Kontakt', 'desc' => 'Kontakt zu EstNor für serielle Fassadensanierung in Deutschland – für Bau- und Sanierungsunternehmen, Planungsbüros und Wohnungsunternehmen.'],
    'impressum'   => ['title' => 'Impressum', 'desc' => 'Impressum und Anbieterkennzeichnung für seriell-sanierung.de.'],
    'datenschutz' => ['title' => 'Datenschutzerklärung', 'desc' => 'Informationen zur Verarbeitung personenbezogener Daten auf seriell-sanierung.de nach DSGVO.'],
    'e404'    => ['title' => 'Seite nicht gefunden', 'desc' => 'Die aufgerufene Seite existiert nicht.'],
  ],

  'home' => [
    'hero_eyebrow'    => 'Fertigungspartner aus Estland',
    'hero_title'      => 'Serielle Sanierung beginnt im Werk.',
    'hero_title_accent' => 'Nicht auf dem Gerüst.',
    'hero_lead'      => 'EstNor fertigt gedämmte Fassaden- und Dachelemente mit bereits eingebauten Fenstern, Lüftungsführung und fertiger Fassadenoberfläche. Rund 90 % der Fassadenarbeit passiert unter kontrollierten Werksbedingungen – die Montage vor Ort dauert dann Wochen statt Monate.',
    'hero_cta2'      => 'Was ist serielle Sanierung?',
    'hero_badges'    => ['Seit 2000', 'ISO 9001 · CE · EOTA · Ü-Zeichen', 'Fertigung in der EU'],

    'offer_eyebrow'  => 'Das Angebot',
    'offer_title'    => 'Ein Fertigungspartner für die Gebäudehülle',
    'offer_lead'     => 'EstNor liefert die vorgefertigten Bauteile. Planung, Genehmigung, Vertrieb und Montage übernehmen Sie oder Ihr lokaler Partnerbetrieb in Deutschland.',
    'offer_cards'    => [
      ['Fassadenelemente', 'Holzrahmenelemente mit Dämmung, Wind- und Dampfsperre, energieeffizienten PVC-Fenstern und vormontierter Fassadenplatte – auf Maß nach 3D-Aufmaß.'],
      ['Dachelemente', 'Vorgefertigte Dachelemente inklusive Vorbereitung für Photovoltaik – im selben Fertigungslauf wie die Fassade, für eine durchgängige Hülle.'],
      ['Von Aufmaß bis Montage', 'Auf Wunsch übernimmt EstNor Gebäudeaufmaß, Statik, Konstruktion, Werksfertigung, Transport und Montagebegleitung – als Gesamtpaket.'],
    ],
    'offer_cta'      => 'Aufbau der Elemente ansehen',

    'why_eyebrow'    => 'Warum jetzt',
    'why_title'      => 'Der deutsche Bestand muss saniert werden – schneller, als es konventionell geht',
    'why_body'       => 'Millionen Wohnungen in Mehrfamilienhäusern der Baujahre 1950–1979 sind energetisch auf dem Stand ihrer Errichtung. Klimaziele im Gebäudesektor, steigende Betriebskosten und Fachkräftemangel im Bauhandwerk treffen aufeinander. Serielle Sanierung mit vorgefertigten Elementen ist die Antwort auf dieses Tempoproblem.',
    'why_drivers_eyebrow' => 'Treiber im Markt',
    'why_drivers'    => [
      'Bundesförderung für effiziente Gebäude (BEG) inkl. Bonus für serielle Sanierung',
      'Standardisierte Grundrisse und Gebäudetypen – ideal für wiederkehrende Elementtypen',
      'Weniger Personal auf der Baustelle: der Fertigungsgrad verlagert Arbeit ins Werk',
      'Sanierung im bewohnten Zustand – kein Auszug der Mieter nötig',
      'Kein Gerüst, kein monatelanger Baustellenbetrieb im Quartier',
    ],

    'process_eyebrow' => 'Ablauf',
    'process_title'   => 'Vier Schritte von der Bestandsaufnahme zur fertigen Fassade',
    'process_steps'   => [
      ['3D-Aufmaß', 'Gebäudescan vom Boden und per Drohne erfasst den Bestand millimetergenau.'],
      ['BIM-Planung &amp; Konstruktion', 'Aus der Punktwolke entsteht das BIM-Modell – Grundlage passgenauer Elemente mit Fenstern, Anschlüssen und Lüftungsführung.'],
      ['Werksfertigung', 'Rund 90 % der Fassadenarbeit erfolgt witterungsunabhängig im Werk in Kiili, mit gleichbleibender Qualität.'],
      ['Transport &amp; Montage', 'Lieferung nach Deutschland, Montage durch Ihr Team – ein Gebäude mit mehreren Treppenhäusern in rund 3–4 Wochen statt fast einem Jahr.'],
    ],

    'stats_eyebrow'  => 'Hersteller',
    'stats_title'    => 'EstNor in Zahlen',
    'stats_lead'     => 'EstNor OÜ baut seit dem Jahr 2000 vorgefertigte Holzhäuser und Elemente – überwiegend für den Export nach Nord- und Mitteleuropa.',
    'stats_cta'      => 'Mehr über EstNor',

    'ref_eyebrow'    => 'Referenzen',
    'ref_title'      => 'Serielle Fassadensanierung in der Praxis',
    'ref_lead'       => 'EstNor war der erste und mengenmäßig größte Elementlieferant im estnischen KredEx-Pilotprogramm für serielle Sanierung.',
    'ref_cta'        => 'Alle Referenzen',

    'final_title'    => 'Sie planen serielle Sanierungsprojekte in Deutschland?',
    'final_body'     => 'Schicken Sie uns Eckdaten zum Gebäude – Baujahr, Wohneinheiten, Fassadenfläche. Wir melden uns mit einer ersten Einschätzung zur Elementfertigung zurück.',
  ],

  'ss' => [
    'eyebrow' => 'Grundlagen',
    'title'   => 'Serielle Sanierung: die Gebäudehülle kommt aus dem Werk',
    'lead'    => 'Serielle Sanierung überträgt das Prinzip der industriellen Vorfertigung auf die energetische Modernisierung des Bestands. Statt Gerüst, Einzelhandwerk und Witterung auf der Baustelle zu koordinieren, werden Fassaden- und Dachelemente digital geplant, im Werk gefertigt und vor Ort in kurzer Zeit montiert.',

    'concept_title' => 'Woher das Konzept stammt',
    'concept_p1'    => 'Die Idee geht auf das niederländische <b>Energiesprong</b>-Prinzip zurück (seit 2013). Ziel ist eine schnelle, standardisierte und bezahlbare Bestandssanierung „in der Breite“ – bis hin zum Netto-Null-Standard im Betrieb. In Deutschland wird der Ansatz über die Bundesförderung für effiziente Gebäude (BEG) und Programme der KfW unterstützt.',
    'concept_p2'    => 'Der entscheidende Hebel ist ein <b>möglichst hoher Vorfertigungsgrad</b>: ganze Fassadenmodule entstehen im Werk und werden fertig zur Baustelle geliefert – mit Dämmung, Fenstern, Lüftungsführung und Oberfläche.',

    'benefits_title' => 'Was das konkret bringt',
    'benefits' => [
      'Deutlich kürzere Bauzeit vor Ort – oft im bewohnten Zustand',
      'Gleichbleibende Qualität durch Fertigung unter Werksbedingungen',
      'Planbare Kosten dank standardisierter Prozesse und Wiederholung',
      'Weniger Lärm, Staub und Zugangsaufwand für Bewohner',
      'Kein Gerüst über Monate, weniger Personal auf der Baustelle',
    ],

    'how_eyebrow' => 'So funktioniert es',
    'how_title'   => 'Vom Gebäudescan zur montierten Fassade',
    'how_steps'   => [
      ['Digitales Aufmaß', '3D-Scan des Bestandsgebäudes vom Boden und per Drohne.'],
      ['BIM-Modell', 'Aus der Punktwolke entsteht ein maßhaltiges Gebäudemodell.'],
      ['Konstruktion &amp; Fertigung', 'Passgenaue Elemente inkl. Fenster, Anschlussdetails und Lüftung; Serienfertigung im Werk.'],
      ['Montage', 'Eckelement, Reihe für Reihe, dann Lüftung, Treppenhauselemente, Fugen, Regenwasser und Dach.'],
    ],

    'target_eyebrow' => 'Typische Zielgebäude',
    'target_title'   => 'Wo serielle Sanierung besonders wirkt',
    'target_body'    => 'Mehrfamilienhäuser der Baujahre 1950–1979 mit standardisierten Grundrissen und hohem Energieverbrauch: Zeilen- und Plattenbauten, Wohnblöcke, Siedlungen mit vielen baugleichen Häusern. Ähnliche Geometrien lassen sich mit wiederkehrenden Elementtypen effizient sanieren – ein ganzes Quartier statt Einzelgebäude.',

    'funding_eyebrow' => 'Förderung in Deutschland',
    'funding' => [
      'BEG-Förderung für die Sanierung zum Effizienzhaus-Standard',
      'Zusätzlicher Bonus für serielle Sanierung innerhalb der BEG',
      'Kombinierbar mit Dachaufstockung / Nachverdichtung',
      'Förderlandschaft ändert sich – aktuelle Konditionen vor Projektstart prüfen',
    ],
    'funding_callout' => '<b>Hinweis:</b> Förderdetails und Bonushöhen sind zum Livegang zu verifizieren (BEG / KfW, Stand des jeweiligen Programmjahres).',

    'final_title' => 'Sie steigen in die serielle Sanierung ein?',
    'final_body'  => 'EstNor liefert die vorgefertigten Elemente – Sie bringen lokale Planung, Vertrieb und Montage ein. Sprechen wir über eine Zusammenarbeit.',
  ],

  'fe' => [
    'eyebrow' => 'Das Produkt',
    'title'   => 'Das Fassadenelement: eine fertige Wand statt vieler Einzelgewerke',
    'lead'    => 'Jedes Element ist eine tragfähige Holzrahmenkonstruktion, die im Werk zu rund 90 % fertiggestellt wird – gedämmt, mit Fenstern, Lüftungsführung und fertiger Oberfläche. Auf der Baustelle wird es nur noch gesetzt und angeschlossen.',

    'buildup_title' => 'Aufbau des Elements',
    'buildup' => [
      'Tragende Holzrahmenkonstruktion, digital konstruiert nach BIM-Modell',
      'Dämmung (Mineralwolle) im Element, wärmebrückenarm',
      'Wind- und Dampfsperre, werkseitig verklebt',
      'Energieeffiziente PVC-Fenster, fertig eingebaut und justiert',
      'Lüftungskanäle nach Planung im Element geführt',
      'Fassadenplatte / Bekleidung vormontiert – Oberfläche ab Werk',
    ],

    'grade_eyebrow' => 'Fertigungsgrad',
    'grade_title'   => 'Warum 90 % im Werk der entscheidende Punkt ist',
    'grade_cards'   => [
      ['Witterungsunabhängig', 'Fertigung in der Halle – kein Baustopp bei Regen, Frost oder Wind.'],
      ['Gleichbleibende Qualität', 'Kontrollierte Bedingungen, wiederholbare Prozesse, weniger Nacharbeit.'],
      ['Kein Gerüst', 'Elemente werden von außen gesetzt – ohne Einrüstung, ohne Zugang zu Wohnungen.'],
      ['Weniger Personal vor Ort', 'Die Arbeit verlagert sich ins Werk – ein kleines Montageteam genügt.'],
      ['Bewohnt sanierbar', 'Mieter bleiben in der Wohnung; die Belastung ist auf Tage statt Monate begrenzt.'],
      ['Kurze Bauzeit', 'Ein Gebäude mit mehreren Treppenhäusern in rund 3–4 Wochen statt fast einem Jahr.'],
    ],

    'montage_eyebrow' => 'Montage vor Ort',
    'montage_title'   => 'In neun Schritten zur neuen Hülle',
    'montage_cards'   => [
      ['1 · 3D-Scan', 'Erfassung vom Boden und per Drohne.'],
      ['2 · BIM-Modell', 'Punktwolke wird zum maßhaltigen Modell.'],
      ['3 · Vorbereitung', 'Konsolen und Fußschwellen am Bestand.'],
      ['4 · Eckelemente', 'Setzen der ersten Elemente an den Gebäudeecken.'],
      ['5 · Reihenmontage', 'Element für Element, Reihe für Reihe.'],
      ['6 · Vollflächig', 'Die Fassade ist komplett mit Elementen bedeckt.'],
      ['7 · Lüftung', 'Anschluss der Lüftungsrohre.'],
      ['8 · Treppenhaus', 'Montage der Treppenhauselemente.'],
      ['9 · Abschluss', 'Fugen, Regenwassersystem, Dachanschluss.'],
    ],

    'logistics_eyebrow' => 'Logistik',
    'logistics_title'   => 'Aus Estland nach Deutschland – innerhalb der EU',
    'logistics_body'    => 'Produktion im Werk in Kiili bei Tallinn. Als EU-Mitgliedstaat entfallen Zollformalitäten; die Wege über die Ostsee und auf dem Landweg sind gut erschlossen. Elemente werden montagegerecht sortiert und just-in-time angeliefert.',

    'quality_eyebrow' => 'Qualität &amp; Nachweise',
    'quality' => [
      'Qualitätsmanagement nach ISO 9001',
      'CE-Kennzeichnung, europäische technische Bewertung (EOTA)',
      'Ü-Zeichen (Übereinstimmungszeichen) für den Einsatz in Deutschland',
      'Mitglied im estnischen Holzhausverband (Puitmajaliit)',
      'Projektbezogene Nachweise nach deutschen Anforderungen auf Anfrage',
    ],
    'quality_callout' => '<b>Zu ergänzen:</b> konkrete bauaufsichtliche Nachweise / Zulassungen für den Einsatz in Deutschland (z. B. abZ/aBG, Brandschutzklassifizierung) vor Livegang mit EstNor abstimmen.',

    'final_title' => 'Elementaufbau für Ihr Projekt durchsprechen',
    'final_body'  => 'Schicken Sie uns Gebäudetyp, Baujahr und Fassadenfläche – wir schätzen Elementtypen, Fertigungsaufwand und Lieferzeit ein.',
  ],

  'about' => [
    'eyebrow' => 'Über EstNor',
    'title'   => 'Werksfertigung mit 25 Jahren Erfahrung',
    'lead'    => 'EstNor OÜ ist ein estnisches Unternehmen mit eigener Hausfabrik in Kiili bei Tallinn. Seit dem Jahr 2000 fertigt EstNor vorgefertigte Holzhäuser sowie Fassaden- und Dachelemente für Neubau und Sanierung.',

    'brings_eyebrow' => 'Was EstNor mitbringt',
    'brings_title'   => 'Fertigung, nicht Beratungsware',
    'brings' => [
      'Digitale Planung &amp; Konstruktion vorgefertigter Fassaden- und Dachelemente',
      'Serienfertigung unter Werksbedingungen mit gleichbleibender Qualität',
      'Integration von Fenstern, Dämmung, Lüftungsführung und Oberfläche im Element',
      'Gebäudeaufmaß, Statik, Transport und Montagebegleitung auf Wunsch',
      'Jahresausstoß rund 50 Häuser bzw. ~10.000 m² Grundfläche',
    ],

    'roles_eyebrow' => 'Aufgabenteilung im deutschen Markt',
    'roles_title'   => 'Klare Rollen',
    'roles_p1'      => 'EstNor übernimmt Konstruktion und werkseitige Fertigung der Elemente. Partnerbetriebe in Deutschland bringen Bauleitung, Kundenbeziehungen, Genehmigungsplanung und Montage ein. So verbindet sich Fertigungskompetenz mit lokaler Marktkenntnis – ohne dass eine Seite eigene Werkskapazität aufbauen muss.',
    'roles_p2'      => 'Der Fokus liegt auf standardisierten Mehrfamilienhäusern, wie sie in vielen europäischen Ländern aus den Jahrzehnten des industriellen Wohnungsbaus existieren.',

    'origin_eyebrow' => 'Markt &amp; Herkunft',
    'origin_title'   => 'Warum aus Estland?',
    'origin_body'    => 'Estland hat eine etablierte Holz- und Elementbauindustrie mit langer Exporterfahrung. Rund 90 % der EstNor-Produktion gehen in den Export – schwerpunktmäßig nach Norwegen, außerdem nach Schweden, in die Schweiz, nach Finnland, Deutschland und Liechtenstein. Als EU-Mitgliedstaat entfallen Zollformalitäten im Handel mit Deutschland.',

    'proof_eyebrow' => 'Nachweise &amp; Mitgliedschaften',
    'proof' => [
      'Qualitätsmanagement nach ISO 9001',
      'CE-Kennzeichnung, EOTA',
      'Ü-Zeichen für den Einsatz in Deutschland',
      'Estnischer Holzhausverband (Puitmajaliit)',
      'Unternehmerverband Kiili, Norwegisch-Estnische Handelskammer',
      'Mehrfach ausgezeichnet beim Wettbewerb „Prefab House of the Year“ (2015–2023)',
    ],

    'exp_eyebrow' => 'Erfahrung mit serieller Sanierung',
    'exp_title'   => 'Erster Elementlieferant im estnischen Pilotprogramm',
    'exp_lead'    => 'Im KredEx-Pilotprogramm für serielle Sanierung (2022–2027) war EstNor der erste teilnehmende Hersteller und lieferte das größte Volumen an Fassadenelementen – für zwölf Mehrfamilienhäuser.',
    'exp_cta'     => 'Referenzen ansehen',

    'final_title' => 'Lernen wir uns kennen',
    'final_body'  => 'Erzählen Sie uns von Ihren Sanierungsprojekten und Ihrem Bedarf an vorgefertigten Fassadenelementen – wir melden uns zeitnah zurück.',
  ],

  'ref' => [
    'eyebrow' => 'Referenzen',
    'title'   => 'Projekte mit vorgefertigten Elementen',
    'lead'    => 'Ausgewählte Projekte, in denen EstNor-Elemente zum Einsatz kommen. Die Illustrationen sind Skizzen, keine Projektfotos – echte Fotos werden ergänzt, sobald sie vorliegen.',

    'meaning_eyebrow' => 'Einordnung',
    'meaning_title'   => 'Was diese Referenzen zeigen',
    'meaning_body'    => 'Die serielle Fassadensanierung im bewohnten Zustand ist bei EstNor keine Ankündigung, sondern laufende Fertigung: standardisierte Elemente, wiederkehrende Gebäudetypen, Montage in Wochen. Für Deutschland geht es jetzt darum, diese Fertigung mit lokalen Partnern auf konkrete Quartiere zu übertragen.',

    'your_eyebrow' => 'Ihr Projekt',
    'your_title'   => 'Referenz Nummer eins in Deutschland',
    'your_body'    => 'Wenn Sie ein serielles Fassadenprojekt planen und einen Fertigungspartner suchen, sprechen wir über Gebäudetypen, Stückzahlen und Zeitplan.',

    'final_title' => 'Mehr Details zu einem Projekt?',
    'final_body'  => 'Wir stellen auf Anfrage weitere Angaben und – soweit freigegeben – Projektunterlagen zur Verfügung.',
  ],

  'contact' => [
    'eyebrow' => 'Kontakt',
    'title'   => 'Sprechen wir über Ihr serielles Sanierungsprojekt',
    'lead'    => 'Ob Bau- oder Sanierungsunternehmen, Planungsbüro oder Wohnungsunternehmen: Schicken Sie uns Eckdaten zum Gebäude – Baujahr, Wohneinheiten, Fassadenfläche, Zeithorizont. Wir antworten mit einer ersten Einschätzung zur Elementfertigung.',
    'dl_email'   => 'E-Mail',
    'dl_phone'   => 'Telefon',
    'dl_address' => 'Anschrift',
    'note'    => 'Anfragen aus Deutschland beantwortet EstNor auf Deutsch. Gern vereinbaren wir einen Termin oder einen Rückruf.',

    'form_title'   => 'Nachricht senden',
    'form_name'    => 'Name *',
    'form_company' => 'Unternehmen',
    'form_email'   => 'E-Mail *',
    'form_phone'   => 'Telefon',
    'form_message' => 'Nachricht *',
    'form_hp'      => 'Bitte frei lassen',
    'form_submit'  => 'Absenden',
    'form_note'    => 'Mit dem Absenden werden Ihre Angaben zur Bearbeitung der Anfrage verarbeitet. Siehe %s.',
    'form_note_link' => 'Datenschutz',

    'msg_honeypot' => 'Danke für Ihre Nachricht.',
    'msg_err_name' => 'Bitte Namen angeben.',
    'msg_err_email'=> 'Bitte gültige E-Mail-Adresse angeben.',
    'msg_err_msg'  => 'Bitte eine kurze Nachricht schreiben.',
    'msg_sent'     => 'Vielen Dank – Ihre Nachricht ist eingegangen. Wir melden uns zeitnah.',
    'msg_fail'     => 'Der Versand hat nicht geklappt. Bitte schreiben Sie uns direkt an %s.',

    'mail_subject' => 'Anfrage über seriell-sanierung.de',
    'mail_intro'   => 'Neue Anfrage über das Kontaktformular seriell-sanierung.de',
    'mail_l_name'    => 'Name',
    'mail_l_company' => 'Firma',
    'mail_l_email'   => 'E-Mail',
    'mail_l_phone'   => 'Telefon',
    'mail_l_message' => 'Nachricht',
  ],

  'e404' => [
    'eyebrow' => 'Fehler 404',
    'title'   => 'Diese Seite gibt es nicht',
    'body'    => 'Der Link ist womöglich veraltet oder enthält einen Tippfehler.',
    'home'    => 'Zur Startseite',
    'contact' => 'Kontakt',
  ],

  'impressum' => [
    'eyebrow' => 'Rechtliches',
    'title'   => 'Impressum',
    'callout' => '<b>Bitte vor Livegang juristisch prüfen lassen.</b> Dieser Text folgt der üblichen Struktur nach § 5 DDG (Digitale-Dienste-Gesetz) und § 18 MStV und ist <b>keine Rechtsberatung</b>. Betreiber und Diensteanbieter dieser Website ist die EstNor OÜ; die nachstehenden Angaben stammen aus dem estnischen e-Äriregister und von estnor.ee.',
    'h_provider' => 'Diensteanbieter',
    'provider_reg' => '(im Handelsregister: %s)',
    'h_rep'   => 'Vertretungsberechtigte Person',
    'rep'     => '%s, Juhatuse liige (Geschäftsführer)',
    'h_contact' => 'Kontakt',
    'l_phone' => 'Telefon',
    'l_fax'   => 'Telefax',
    'l_email' => 'E-Mail',
    'h_register' => 'Registereintrag',
    'register_court' => 'Eingetragen im estnischen Handelsregister (e-Äriregister), geführt vom Tartu Maakohus (Registrikeskus).',
    'register_code'  => 'Registrikood (Registernummer): %s',
    'register_vat'   => 'Umsatzsteuer-Identifikationsnummer (KMKR nr.): %s',
    'h_content' => 'Verantwortlich für den Inhalt nach § 18 Abs. 2 MStV',
    'content'   => '%s, %s, Anschrift wie oben.',
    'h_odr'   => 'EU-Streitschlichtung',
    'odr'     => 'Die Europäische Kommission stellt eine Plattform zur Online-Streitbeilegung (OS) bereit: <a href="https://ec.europa.eu/consumers/odr/" rel="noopener">https://ec.europa.eu/consumers/odr/</a>. Wir sind nicht verpflichtet und nicht bereit, an einem Streitbeilegungsverfahren vor einer Verbraucherschlichtungsstelle teilzunehmen.',
    'h_liab_content' => 'Haftung für Inhalte',
    'liab_content'   => 'Als Diensteanbieter sind wir für eigene Inhalte auf diesen Seiten nach den allgemeinen Gesetzen verantwortlich. Wir sind nicht verpflichtet, übermittelte oder gespeicherte fremde Informationen zu überwachen. Verpflichtungen zur Entfernung oder Sperrung der Nutzung von Informationen nach den allgemeinen Gesetzen bleiben unberührt.',
    'h_liab_links' => 'Haftung für Links',
    'liab_links'   => 'Unser Angebot enthält Links zu externen Websites Dritter, auf deren Inhalte wir keinen Einfluss haben. Für die Inhalte der verlinkten Seiten ist stets der jeweilige Anbieter oder Betreiber verantwortlich.',
    'h_copyright' => 'Urheberrecht',
    'copyright'   => 'Die durch die Seitenbetreiber erstellten Inhalte und Werke auf diesen Seiten unterliegen dem Urheberrecht. Beiträge Dritter sind als solche gekennzeichnet.',
  ],

  'datenschutz' => [
    'eyebrow' => 'Rechtliches',
    'title'   => 'Datenschutzerklärung',
    'callout' => '<b>Bitte vor Livegang prüfen und anpassen.</b> Dieser Entwurf beschreibt die Standard-Datenverarbeitung einer Informations-Website mit Kontaktformular. Er ist <b>keine Rechtsberatung</b>. Vor Veröffentlichung sind mindestens zu prüfen: tatsächlich eingesetztes Hosting (Server-Standort, Auftragsverarbeitungsvertrag), Schriftauslieferung (siehe Abschnitt „Schriftarten“) sowie ob weitere Dienste (Analyse, Karten, Video) eingebunden werden.',

    'h1' => '1. Verantwortliche Stelle',
    's1_intro' => 'Verantwortlich im Sinne der DSGVO ist:',
    's1_reg'   => '(im Handelsregister: %s)',
    's1_rep'   => 'Vertreten durch: %s (Juhatuse liige / Geschäftsführer)',
    's1_dpo'   => 'Eine gesetzliche Pflicht zur Benennung einer/eines Datenschutzbeauftragten besteht für EstNor OÜ nach derzeitiger Einschätzung nicht. [Vor Livegang bestätigen; ggf. Kontaktdaten ergänzen.]',

    'h2' => '2. Verarbeitung beim Besuch der Website (Server-Logs)',
    's2_p1' => 'Beim Aufruf der Website werden durch den Hosting-Provider automatisch Informationen in Server-Logfiles gespeichert, die Ihr Browser übermittelt: IP-Adresse, Datum und Uhrzeit des Zugriffs, aufgerufene Seite/Datei, übertragene Datenmenge, Referrer-URL, Browser und Betriebssystem.',
    's2_p2' => 'Rechtsgrundlage ist Art. 6 Abs. 1 lit. f DSGVO (berechtigtes Interesse an einem technisch fehlerfreien und sicheren Betrieb). Die Logs werden nach [Zeitraum einsetzen, z. B. 7–14 Tage] gelöscht, sofern keine sicherheitsrelevanten Vorfälle eine längere Aufbewahrung erfordern.',
    's2_p3' => '<b>Hosting:</b> Die Website wird bei [Hosting-Anbieter, Firmierung, Anschrift] gehostet. Mit dem Anbieter besteht ein Vertrag zur Auftragsverarbeitung nach Art. 28 DSGVO. Server-Standort: [Land].',

    'h3' => '3. Kontaktformular und E-Mail-Kontakt',
    's3_p1' => 'Wenn Sie uns über das Kontaktformular oder per E-Mail kontaktieren, verarbeiten wir die von Ihnen gemachten Angaben (Name, Unternehmen, E-Mail-Adresse, Telefon, Nachricht) zur Bearbeitung Ihrer Anfrage.',
    's3_p2' => 'Rechtsgrundlage ist Art. 6 Abs. 1 lit. b DSGVO (vorvertragliche Maßnahmen) bzw. Art. 6 Abs. 1 lit. f DSGVO (berechtigtes Interesse an der Beantwortung von Anfragen). Die Formulardaten werden per E-Mail an uns übermittelt und auf dem Server nicht dauerhaft in einer Datenbank gespeichert. Wir löschen die Daten, sobald sie für den Zweck nicht mehr erforderlich sind und keine gesetzlichen Aufbewahrungspflichten entgegenstehen.',

    'h4' => '4. Schriftarten',
    's4_p1' => 'Diese Website bindet Schriftarten („Bricolage Grotesque“, „Inter“) über Google Fonts ein. Dabei wird eine Verbindung zu Servern von Google (Google Ireland Limited / Google LLC, USA) hergestellt und Ihre IP-Adresse übertragen. Rechtsgrundlage: Art. 6 Abs. 1 lit. f DSGVO.',
    's4_p2' => '[Datenschutzfreundlicher: die Schriftdateien lokal auf dem eigenen Server ausliefern und die externe Einbindung entfernen. In diesem Fall diesen Abschnitt entsprechend anpassen bzw. streichen.]',

    'h5' => '5. Keine Analyse-Tools / kein Tracking',
    's5_p1' => 'Diese Website setzt derzeit keine Analyse-, Tracking- oder Marketing-Cookies ein. Gesetzt wird lediglich ein technisch notwendiges Cookie zur Speicherung der gewählten Sprache. Ein Cookie-Banner besteht nicht, da keine einwilligungspflichtigen Technologien genutzt werden. [Anpassen, sobald z. B. Webanalyse eingesetzt wird.]',

    'h6' => '6. Ihre Rechte',
    's6_p1' => 'Sie haben im Rahmen der gesetzlichen Vorgaben das Recht auf Auskunft (Art. 15), Berichtigung (Art. 16), Löschung (Art. 17), Einschränkung der Verarbeitung (Art. 18), Datenübertragbarkeit (Art. 20) sowie ein Widerspruchsrecht gegen Verarbeitungen auf Grundlage von Art. 6 Abs. 1 lit. f DSGVO (Art. 21).',
    's6_p2' => 'Zudem haben Sie ein Beschwerderecht bei einer Datenschutz-Aufsichtsbehörde.',

    'h7' => '7. Änderungen',
    's7_p1' => 'Wir passen diese Datenschutzerklärung an, sobald Änderungen der Website oder der Rechtslage dies erfordern. Es gilt die jeweils hier veröffentlichte Fassung.',
  ],

  'projects' => [
    'kredex' => [
      'title' => 'KredEx-Pilotprogramm für serielle Sanierung',
      'meta'  => 'Estland · 2022–2027',
      'tags'  => ['Fassadenelemente', 'Pilotprogramm', 'Im bewohnten Zustand'],
      'body'  => 'Staatliches Pilotprogramm zur werkseitigen Sanierung von Wohngebäuden. EstNor war der erste teilnehmende Elementhersteller und lieferte das größte Volumen an Fassadenelementen im Programm.',
      'stats' => [['12', 'Mehrfamilienhäuser'], ['1.', 'teilnehmender Hersteller']],
    ],
    'loodusmaja' => [
      'title' => 'Loodusmaja – Umwelthaus Tallinn',
      'meta'  => 'Tallinn, Estland',
      'tags'  => ['Fassaden- &amp; Dachelemente', 'Vormontierte Fenster', 'Holzbau'],
      'body'  => 'Für eines der größten Holzgebäude Estlands liefert EstNor rund 8.000 m² vorgefertigte Fassaden- und Dachelemente – inklusive im Werk eingebauter Fenster.',
      'stats' => [['~8.000 m²', 'Elementfläche'], ['Werk', 'Fenstereinbau']],
    ],
    'germany' => [
      'title' => 'Erste Projekte in Deutschland',
      'meta'  => 'Deutschland · in Vorbereitung',
      'tags'  => ['Partnersuche', 'Mehrfamilienhaus', '1950–1979'],
      'body'  => 'EstNor baut die Fertigungskapazität gezielt für den deutschen Markt aus und sucht Bau-, Sanierungs- und Wohnungsunternehmen für erste serielle Fassadenprojekte. Ihr Projekt kann hier stehen.',
      'stats' => [],
    ],
  ],
];
