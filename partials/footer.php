</main>
<footer class="site-footer">
  <div class="wrap foot-grid">
    <div class="foot-brand">
      <p class="foot-logo">seriell&#8209;sanierung.de</p>
      <p>Vorgefertigte Fassaden- und Dachelemente für die serielle Sanierung von
         Mehrfamilienhäusern. Gefertigt von <?= e($SITE['company']['legal_name']) ?> in Estland,
         montiert von Partnerbetrieben in Deutschland.</p>
    </div>

    <div>
      <h2>Themen</h2>
      <ul>
        <li><a href="/serielle-sanierung.php">Serielle Sanierung</a></li>
        <li><a href="/fassadenelemente.php">Fassadenelemente</a></li>
        <li><a href="/ueber-uns.php">Über EstNor</a></li>
        <li><a href="/referenzen.php">Referenzen</a></li>
      </ul>
    </div>

    <div>
      <h2>Kontakt</h2>
      <ul>
        <li><a href="mailto:<?= e($SITE['contact']['email']) ?>"><?= e($SITE['contact']['email']) ?></a></li>
        <li><a href="tel:<?= e($SITE['contact']['phone_href']) ?>"><?= e($SITE['contact']['phone']) ?></a></li>
        <li><?= e($SITE['company']['street']) ?>, <?= e($SITE['company']['zip_city']) ?></li>
        <li><?= e($SITE['company']['region']) ?></li>
      </ul>
    </div>

    <div>
      <h2>Rechtliches</h2>
      <ul>
        <li><a href="/impressum.php">Impressum</a></li>
        <li><a href="/datenschutz.php">Datenschutz</a></li>
        <li><a href="<?= e($SITE['social']['linkedin']) ?>" rel="noopener">LinkedIn</a></li>
      </ul>
    </div>
  </div>
  <div class="wrap foot-bottom">
    <p>&copy; <?= date('Y') ?> <?= e($SITE['company']['legal_name']) ?>. Alle Rechte vorbehalten.</p>
    <p>Herstellerinformationen und Kennzahlen: estnor.ee</p>
  </div>
</footer>

<script>
  /* Mobilmenü nach Klick auf einen Link schließen */
  document.querySelectorAll('.nav a').forEach(function (a) {
    a.addEventListener('click', function () {
      var t = document.getElementById('nav-toggle');
      if (t) t.checked = false;
    });
  });
</script>
</body>
</html>
