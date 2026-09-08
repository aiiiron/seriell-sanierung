<?php
require_once __DIR__ . '/inc/i18n.php';
$slug = 'referenzen.php';
$page_title = t('meta.ref.title');
$page_desc  = t('meta.ref.desc');
require __DIR__ . '/partials/head.php';
require __DIR__ . '/inc/projects.php';
?>

<section class="section">
  <div class="wrap">
    <div class="section-head">
      <span class="eyebrow"><?= t('ref.eyebrow') ?></span>
      <h1><?= t('ref.title') ?></h1>
      <p class="lead"><?= t('ref.lead') ?></p>
    </div>

    <div class="grid cols-3">
      <?php foreach ($PROJECTS as $p) { include __DIR__ . '/partials/project-card.php'; } ?>
    </div>
  </div>
</section>

<section class="section section--alt">
  <div class="wrap split">
    <div>
      <span class="eyebrow"><?= t('ref.meaning_eyebrow') ?></span>
      <h2><?= t('ref.meaning_title') ?></h2>
      <p><?= t('ref.meaning_body') ?></p>
    </div>
    <div>
      <span class="eyebrow"><?= t('ref.your_eyebrow') ?></span>
      <h2><?= t('ref.your_title') ?></h2>
      <p><?= t('ref.your_body') ?></p>
      <div class="btn-row">
        <a class="btn btn-primary" href="/kontakt.php"><?= t('common.cta_project') ?></a>
      </div>
    </div>
  </div>
</section>

<section class="section section--dark">
  <div class="wrap cta-band">
    <div>
      <h2><?= t('ref.final_title') ?></h2>
      <p><?= t('ref.final_body') ?></p>
    </div>
    <a class="btn btn-primary" href="/kontakt.php"><?= t('common.cta_contact') ?></a>
  </div>
</section>

<?php require __DIR__ . '/partials/footer.php'; ?>
