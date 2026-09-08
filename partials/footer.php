</main>
<footer class="site-footer">
  <div class="wrap foot-grid">
    <div class="foot-brand">
      <p class="foot-logo">seriell&#8209;sanierung.de</p>
      <p><?= sprintf(e(t('footer.tagline')), e($SITE['company']['legal_name'])) ?></p>
    </div>

    <div>
      <h2><?= e(t('footer.h_topics')) ?></h2>
      <ul>
        <li><a href="/serielle-sanierung.php"><?= e(t_nav('serielle-sanierung.php')) ?></a></li>
        <li><a href="/fassadenelemente.php"><?= e(t_nav('fassadenelemente.php')) ?></a></li>
        <li><a href="/ueber-uns.php"><?= e(t_nav('ueber-uns.php')) ?></a></li>
        <li><a href="/referenzen.php"><?= e(t_nav('referenzen.php')) ?></a></li>
      </ul>
    </div>

    <div>
      <h2><?= e(t('footer.h_contact')) ?></h2>
      <ul>
        <li><a href="mailto:<?= e($SITE['contact']['email']) ?>"><?= e($SITE['contact']['email']) ?></a></li>
        <li><a href="tel:<?= e($SITE['contact']['phone_href']) ?>"><?= e($SITE['contact']['phone']) ?></a></li>
        <li><?= e($SITE['company']['street']) ?>, <?= e($SITE['company']['zip_city']) ?></li>
        <li><?= e($SITE['company']['region']) ?></li>
      </ul>
    </div>

    <div>
      <h2><?= e(t('footer.h_legal')) ?></h2>
      <ul>
        <li><a href="/impressum.php"><?= e(t('footer.impressum')) ?></a></li>
        <li><a href="/datenschutz.php"><?= e(t('footer.privacy')) ?></a></li>
        <li><a href="<?= e($SITE['social']['linkedin']) ?>" rel="noopener">LinkedIn</a></li>
      </ul>
    </div>
  </div>
  <div class="wrap foot-bottom">
    <p>&copy; <?= date('Y') ?> <?= e($SITE['company']['legal_name']) ?>. <?= e(t('footer.rights')) ?></p>
    <p><?= e(t('footer.source')) ?></p>
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
