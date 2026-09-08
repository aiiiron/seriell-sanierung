<?php
require_once __DIR__ . '/inc/i18n.php';
http_response_code(404);
$slug = '';
$page_title = t('meta.e404.title');
$page_desc  = t('meta.e404.desc');
require __DIR__ . '/partials/head.php';
?>
<section class="section">
  <div class="wrap" style="text-align:center">
    <span class="eyebrow"><?= t('e404.eyebrow') ?></span>
    <h1><?= t('e404.title') ?></h1>
    <p class="lead" style="margin-inline:auto"><?= t('e404.body') ?></p>
    <div class="btn-row" style="justify-content:center">
      <a class="btn btn-primary" href="/"><?= t('e404.home') ?></a>
      <a class="btn btn-ghost" href="/kontakt.php"><?= t('e404.contact') ?></a>
    </div>
  </div>
</section>
<?php require __DIR__ . '/partials/footer.php'; ?>
