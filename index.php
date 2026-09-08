<?php
$slug = 'index.php';
$page_title = 'Vorgefertigte Fassadenelemente für die serielle Sanierung';
$page_desc = 'EstNor fertigt gedämmte Fassaden- und Dachelemente mit vormontierten Fenstern für die serielle Sanierung von Mehrfamilienhäusern – und liefert sie nach Deutschland.';
require __DIR__ . '/partials/head.php';
?>

<section class="hero wrap">
  <div class="hero-grid">
    <div>
      <span class="eyebrow">Fertigungspartner aus Estland</span>
      <h1>Serielle Sanierung beginnt im Werk – nicht auf dem Gerüst.</h1>
      <p class="lead">
        EstNor fertigt gedämmte Fassaden- und Dachelemente mit bereits eingebauten
        Fenstern, Lüftungsführung und fertiger Fassadenoberfläche. Rund 90 % der
        Fassadenarbeit passiert unter kontrollierten Werksbedingungen – die Montage
        vor Ort dauert dann Wochen statt Monate.
      </p>
      <div class="btn-row">
        <a class="btn btn-primary" href="/kontakt.php">Projekt anfragen</a>
        <a class="btn btn-ghost" href="/serielle-sanierung.php">Was ist serielle Sanierung?</a>
      </div>
      <div class="badge-row">
        <span>Gegründet 2000</span>
        <span>ISO 9001</span>
        <span>CE-Kennzeichnung · EOTA</span>
        <span>Produktion in der EU</span>
      </div>
    </div>
    <div class="panel-stack" aria-hidden="true">
      <i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i>
    </div>
  </div>
</section>

<section class="section section--alt">
  <div class="wrap">
    <div class="section-head">
      <span class="eyebrow">Das Angebot</span>
      <h2>Ein Fertigungspartner für die Gebäudehülle</h2>
      <p class="lead">EstNor liefert die vorgefertigten Bauteile. Planung, Genehmigung,
        Vertrieb und Montage übernehmen Sie oder Ihr lokaler Partnerbetrieb in Deutschland.</p>
    </div>
    <div class="grid cols-3">
      <div class="card">
        <h3>Fassadenelemente</h3>
        <p>Holzrahmenelemente mit Dämmung, Wind- und Dampfsperre, energieeffizienten
          PVC-Fenstern und vormontierter Fassadenplatte – auf Maß nach 3D-Aufmaß.</p>
      </div>
      <div class="card">
        <h3>Dachelemente</h3>
        <p>Vorgefertigte Dachelemente inklusive Vorbereitung für Photovoltaik –
          im selben Fertigungslauf wie die Fassade, für eine durchgängige Hülle.</p>
      </div>
      <div class="card">
        <h3>Von Aufmaß bis Montage</h3>
        <p>Auf Wunsch übernimmt EstNor Gebäudeaufmaß, Statik, Konstruktion,
          Werksfertigung, Transport und Montagebegleitung – als Gesamtpaket.</p>
      </div>
    </div>
    <div class="btn-row">
      <a class="btn btn-ghost" href="/fassadenelemente.php">Aufbau der Elemente ansehen</a>
    </div>
  </div>
</section>

<section class="section">
  <div class="wrap split">
    <div>
      <span class="eyebrow">Warum jetzt</span>
      <h2>Der deutsche Bestand muss saniert werden – schneller, als es konventionell geht</h2>
      <p>Millionen Wohnungen in Mehrfamilienhäusern der Baujahre 1950–1979 sind
        energetisch auf dem Stand ihrer Errichtung. Klimaziele im Gebäudesektor,
        steigende Betriebskosten und Fachkräftemangel im Bauhandwerk treffen
        aufeinander. Serielle Sanierung mit vorgefertigten Elementen ist die
        Antwort auf dieses Tempoproblem.</p>
    </div>
    <div>
      <span class="eyebrow">Treiber im Markt</span>
      <ul class="check">
        <li>Bundesförderung für effiziente Gebäude (BEG) inkl. Bonus für serielle Sanierung</li>
        <li>Standardisierte Grundrisse und Gebäudetypen – ideal für wiederkehrende Elementtypen</li>
        <li>Weniger Personal auf der Baustelle: der Fertigungsgrad verlagert Arbeit ins Werk</li>
        <li>Sanierung im bewohnten Zustand – kein Auszug der Mieter nötig</li>
        <li>Kein Gerüst, kein monatelanger Baustellenbetrieb im Quartier</li>
      </ul>
    </div>
  </div>
</section>

<section class="section section--tint">
  <div class="wrap">
    <div class="section-head center">
      <span class="eyebrow">Ablauf</span>
      <h2>Vier Schritte von der Bestandsaufnahme zur fertigen Fassade</h2>
    </div>
    <ol class="steps">
      <li>
        <h3>3D-Aufmaß</h3>
        <p>Gebäudescan vom Boden und per Drohne erfasst den Bestand millimetergenau.</p>
      </li>
      <li>
        <h3>BIM-Planung &amp; Konstruktion</h3>
        <p>Aus der Punktwolke entsteht das BIM-Modell – Grundlage passgenauer Elemente
          mit Fenstern, Anschlüssen und Lüftungsführung.</p>
      </li>
      <li>
        <h3>Werksfertigung</h3>
        <p>Rund 90 % der Fassadenarbeit erfolgt witterungsunabhängig im Werk in Kiili,
          mit gleichbleibender Qualität.</p>
      </li>
      <li>
        <h3>Transport &amp; Montage</h3>
        <p>Lieferung nach Deutschland, Montage durch Ihr Team – ein Gebäude mit mehreren
          Treppenhäusern in rund 3–4 Wochen statt fast einem Jahr.</p>
      </li>
    </ol>
  </div>
</section>

<section class="section">
  <div class="wrap">
    <div class="section-head">
      <span class="eyebrow">Hersteller</span>
      <h2>EstNor in Zahlen</h2>
      <p class="lead">Estnor OÜ baut seit dem Jahr 2000 vorgefertigte Holzhäuser und
        Elemente – überwiegend für den Export nach Nord- und Mitteleuropa.</p>
    </div>
    <div class="stat-row">
      <?php foreach ($SITE['stats'] as [$v, $l]): ?>
        <div class="stat"><b><?= e($v) ?></b><span><?= e($l) ?></span></div>
      <?php endforeach; ?>
    </div>
    <div class="btn-row">
      <a class="btn btn-ghost" href="/ueber-uns.php">Mehr über EstNor</a>
    </div>
  </div>
</section>

<section class="section section--alt">
  <div class="wrap">
    <div class="section-head">
      <span class="eyebrow">Referenzen</span>
      <h2>Serielle Fassadensanierung in der Praxis</h2>
      <p class="lead">EstNor war der erste und mengenmäßig größte Elementlieferant im
        estnischen KredEx-Pilotprogramm für serielle Sanierung.</p>
    </div>
    <div class="grid cols-2">
      <?php
      require __DIR__ . '/inc/projects.php';
      foreach (array_slice($PROJECTS, 0, 2) as $p) {
          include __DIR__ . '/partials/project-card.php';
      }
      ?>
    </div>
    <div class="btn-row">
      <a class="btn btn-ghost" href="/referenzen.php">Alle Referenzen</a>
    </div>
  </div>
</section>

<section class="section section--dark">
  <div class="wrap cta-band">
    <div>
      <h2>Sie planen serielle Sanierungsprojekte in Deutschland?</h2>
      <p>Schicken Sie uns Eckdaten zum Gebäude – Baujahr, Wohneinheiten, Fassadenfläche.
        Wir melden uns mit einer ersten Einschätzung zur Elementfertigung zurück.</p>
    </div>
    <a class="btn btn-primary" href="/kontakt.php">Anfrage stellen</a>
  </div>
</section>

<?php require __DIR__ . '/partials/footer.php'; ?>
