<?php
$slug = 'ueber-uns.php';
$page_title = 'Über EstNor';
$page_desc = 'EstNor OÜ fertigt seit dem Jahr 2000 vorgefertigte Holzhäuser und Fassadenelemente im Werk in Kiili, Estland – überwiegend für den Export nach Nord- und Mitteleuropa.';
require __DIR__ . '/partials/head.php';
?>

<section class="section">
  <div class="wrap">
    <div class="section-head">
      <span class="eyebrow">Über EstNor</span>
      <h1>Werksfertigung mit 25 Jahren Erfahrung</h1>
      <p class="lead">
        EstNor OÜ ist ein estnisches Unternehmen mit eigener Hausfabrik in Kiili bei
        Tallinn. Seit dem Jahr 2000 fertigt EstNor vorgefertigte Holzhäuser sowie
        Fassaden- und Dachelemente für Neubau und Sanierung.
      </p>
    </div>

    <div class="stat-row">
      <?php foreach ($SITE['stats'] as [$v, $l]): ?>
        <div class="stat"><b><?= e($v) ?></b><span><?= e($l) ?></span></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section section--alt">
  <div class="wrap split">
    <div>
      <span class="eyebrow">Was EstNor mitbringt</span>
      <h2>Fertigung, nicht Beratungsware</h2>
      <ul class="check">
        <li>Digitale Planung &amp; Konstruktion vorgefertigter Fassaden- und Dachelemente</li>
        <li>Serienfertigung unter Werksbedingungen mit gleichbleibender Qualität</li>
        <li>Integration von Fenstern, Dämmung, Lüftungsführung und Oberfläche im Element</li>
        <li>Gebäudeaufmaß, Statik, Transport und Montagebegleitung auf Wunsch</li>
        <li>Jahresausstoß rund 50 Häuser bzw. ~10.000 m² Grundfläche</li>
      </ul>
    </div>
    <div>
      <span class="eyebrow">Aufgabenteilung im deutschen Markt</span>
      <h2>Klare Rollen</h2>
      <p>EstNor übernimmt Konstruktion und werkseitige Fertigung der Elemente.
        Partnerbetriebe in Deutschland bringen Bauleitung, Kundenbeziehungen,
        Genehmigungsplanung und Montage ein. So verbindet sich Fertigungskompetenz
        mit lokaler Marktkenntnis – ohne dass eine Seite eigene Werkskapazität
        aufbauen muss.</p>
      <p>Der Fokus liegt auf standardisierten Mehrfamilienhäusern, wie sie in vielen
        europäischen Ländern aus den Jahrzehnten des industriellen Wohnungsbaus
        existieren.</p>
    </div>
  </div>
</section>

<section class="section">
  <div class="wrap split">
    <div>
      <span class="eyebrow">Markt &amp; Herkunft</span>
      <h2>Warum aus Estland?</h2>
      <p>Estland hat eine etablierte Holz- und Elementbauindustrie mit langer
        Exporterfahrung. Rund 90 % der EstNor-Produktion gehen in den Export –
        schwerpunktmäßig nach Norwegen, außerdem nach Schweden, in die Schweiz,
        nach Finnland, Deutschland und Liechtenstein. Als EU-Mitgliedstaat
        entfallen Zollformalitäten im Handel mit Deutschland.</p>
    </div>
    <div>
      <span class="eyebrow">Nachweise &amp; Mitgliedschaften</span>
      <ul class="check">
        <li>Qualitätsmanagement nach ISO 9001</li>
        <li>CE-Kennzeichnung, EOTA</li>
        <li>Estnischer Holzhausverband (Puitmajaliit)</li>
        <li>Unternehmerverband Kiili, Norwegisch-Estnische Handelskammer</li>
        <li>Mehrfach ausgezeichnet beim Wettbewerb „Prefab House of the Year“ (2015–2023)</li>
      </ul>
    </div>
  </div>
</section>

<section class="section section--tint">
  <div class="wrap">
    <div class="section-head">
      <span class="eyebrow">Erfahrung mit serieller Sanierung</span>
      <h2>Erster Elementlieferant im estnischen Pilotprogramm</h2>
      <p class="lead">Im KredEx-Pilotprogramm für serielle Sanierung (2022–2027) war
        EstNor der erste teilnehmende Hersteller und lieferte das größte Volumen an
        Fassadenelementen – für zwölf Mehrfamilienhäuser.</p>
    </div>
    <div class="btn-row">
      <a class="btn btn-ghost" href="/referenzen.php">Referenzen ansehen</a>
    </div>
  </div>
</section>

<section class="section section--dark">
  <div class="wrap cta-band">
    <div>
      <h2>Lernen wir uns kennen</h2>
      <p>Erzählen Sie uns von Ihren Sanierungsprojekten und Ihrem Bedarf an
        vorgefertigten Fassadenelementen – wir melden uns zeitnah zurück.</p>
    </div>
    <a class="btn btn-primary" href="/kontakt.php">Kontakt aufnehmen</a>
  </div>
</section>

<?php require __DIR__ . '/partials/footer.php'; ?>
