<?php
$slug = 'referenzen.php';
$page_title = 'Referenzen';
$page_desc = 'Referenzprojekte von EstNor für vorgefertigte Fassaden- und Dachelemente – darunter das estnische KredEx-Pilotprogramm für serielle Sanierung und das Umwelthaus Loodusmaja in Tallinn.';
require __DIR__ . '/partials/head.php';
require __DIR__ . '/inc/projects.php';
?>

<section class="section">
  <div class="wrap">
    <div class="section-head">
      <span class="eyebrow">Referenzen</span>
      <h1>Projekte mit vorgefertigten Elementen</h1>
      <p class="lead">
        Ausgewählte Projekte, in denen EstNor-Elemente zum Einsatz kommen. Die
        Illustrationen sind Skizzen, keine Projektfotos – echte Fotos werden ergänzt,
        sobald sie vorliegen.
      </p>
    </div>

    <div class="grid cols-3">
      <?php foreach ($PROJECTS as $p) { include __DIR__ . '/partials/project-card.php'; } ?>
    </div>
  </div>
</section>

<section class="section section--alt">
  <div class="wrap split">
    <div>
      <span class="eyebrow">Einordnung</span>
      <h2>Was diese Referenzen zeigen</h2>
      <p>Die serielle Fassadensanierung im bewohnten Zustand ist bei EstNor keine
        Ankündigung, sondern laufende Fertigung: standardisierte Elemente,
        wiederkehrende Gebäudetypen, Montage in Wochen. Für Deutschland geht es jetzt
        darum, diese Fertigung mit lokalen Partnern auf konkrete Quartiere zu
        übertragen.</p>
    </div>
    <div>
      <span class="eyebrow">Ihr Projekt</span>
      <h2>Referenz Nummer eins in Deutschland</h2>
      <p>Wenn Sie ein serielles Fassadenprojekt planen und einen Fertigungspartner
        suchen, sprechen wir über Gebäudetypen, Stückzahlen und Zeitplan.</p>
      <div class="btn-row">
        <a class="btn btn-primary" href="/kontakt.php">Projekt anfragen</a>
      </div>
    </div>
  </div>
</section>

<section class="section section--dark">
  <div class="wrap cta-band">
    <div>
      <h2>Mehr Details zu einem Projekt?</h2>
      <p>Wir stellen auf Anfrage weitere Angaben und – soweit freigegeben –
        Projektunterlagen zur Verfügung.</p>
    </div>
    <a class="btn btn-primary" href="/kontakt.php">Kontakt aufnehmen</a>
  </div>
</section>

<?php require __DIR__ . '/partials/footer.php'; ?>
