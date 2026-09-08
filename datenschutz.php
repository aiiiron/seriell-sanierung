<?php
require_once __DIR__ . '/inc/site.php';
require_once __DIR__ . '/inc/i18n.php';
$slug = 'datenschutz.php';
$page_title = t('meta.datenschutz.title');
$page_desc  = t('meta.datenschutz.desc');
require __DIR__ . '/partials/head.php';

$c = $SITE['company'];
$k = $SITE['contact'];
?>

<section class="section">
  <div class="wrap prose" style="max-width:52rem">
    <span class="eyebrow"><?= t('datenschutz.eyebrow') ?></span>
    <h1><?= t('datenschutz.title') ?></h1>

    <div class="callout"><?= t('datenschutz.callout') ?></div>

    <h2><?= t('datenschutz.h1') ?></h2>
    <p>
      <?= t('datenschutz.s1_intro') ?><br>
      <?= e($c['legal_name']) ?>
      <?= sprintf(e(t('datenschutz.s1_reg')), e($c['register_name'])) ?><br>
      <?= e($c['street']) ?>, <?= e($c['zip_city']) ?>, <?= e($c['region']) ?><br>
      <?= sprintf(e(t('datenschutz.s1_rep')), e($c['ceo'])) ?><br>
      <?= t('impressum.l_email') ?>: <a href="mailto:<?= e($k['email']) ?>"><?= e($k['email']) ?></a><br>
      <?= t('impressum.l_phone') ?>: <?= e($k['phone']) ?>
    </p>
    <p><?= t('datenschutz.s1_dpo') ?></p>

    <h2><?= t('datenschutz.h2') ?></h2>
    <p><?= t('datenschutz.s2_p1') ?></p>
    <p><?= t('datenschutz.s2_p2') ?></p>
    <p><?= t('datenschutz.s2_p3') ?></p>

    <h2><?= t('datenschutz.h3') ?></h2>
    <p><?= t('datenschutz.s3_p1') ?></p>
    <p><?= t('datenschutz.s3_p2') ?></p>

    <h2><?= t('datenschutz.h4') ?></h2>
    <p><?= t('datenschutz.s4_p1') ?></p>
    <p><?= t('datenschutz.s4_p2') ?></p>

    <h2><?= t('datenschutz.h5') ?></h2>
    <p><?= t('datenschutz.s5_p1') ?></p>

    <h2><?= t('datenschutz.h6') ?></h2>
    <p><?= t('datenschutz.s6_p1') ?></p>
    <p><?= t('datenschutz.s6_p2') ?></p>

    <h2><?= t('datenschutz.h7') ?></h2>
    <p><?= t('datenschutz.s7_p1') ?></p>
  </div>
</section>

<?php require __DIR__ . '/partials/footer.php'; ?>
