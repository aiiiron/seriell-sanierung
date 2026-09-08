<?php
http_response_code(404);
$slug = '';
$page_title = 'Seite nicht gefunden';
$page_desc = 'Die aufgerufene Seite existiert nicht.';
require __DIR__ . '/partials/head.php';
?>
<section class="section">
  <div class="wrap" style="text-align:center">
    <span class="eyebrow">Fehler 404</span>
    <h1>Diese Seite gibt es nicht</h1>
    <p class="lead" style="margin-inline:auto">Der Link ist womöglich veraltet oder
      enthält einen Tippfehler.</p>
    <div class="btn-row" style="justify-content:center">
      <a class="btn btn-primary" href="/">Zur Startseite</a>
      <a class="btn btn-ghost" href="/kontakt.php">Kontakt</a>
    </div>
  </div>
</section>
<?php require __DIR__ . '/partials/footer.php'; ?>
