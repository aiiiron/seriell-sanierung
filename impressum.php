<?php
require_once __DIR__ . '/inc/site.php';
require_once __DIR__ . '/inc/i18n.php';
$slug = 'impressum.php';
$page_title = t('meta.impressum.title');
$page_desc  = t('meta.impressum.desc');
require __DIR__ . '/partials/head.php';

$c = $SITE['company'];
$k = $SITE['contact'];
?>

<section class="section">
  <div class="wrap prose" style="max-width:52rem">
    <span class="eyebrow"><?= t('impressum.eyebrow') ?></span>
    <h1><?= t('impressum.title') ?></h1>

    <div class="callout"><?= t('impressum.callout') ?></div>

    <h2><?= t('impressum.h_provider') ?></h2>
    <p>
      <?= e($c['legal_name']) ?>
      <?= sprintf(e(t('impressum.provider_reg')), e($c['register_name'])) ?><br>
      <?= e($c['street']) ?><br>
      <?= e($c['zip_city']) ?><br>
      <?= e($c['region']) ?>
    </p>

    <h2><?= t('impressum.h_rep') ?></h2>
    <p><?= sprintf(e(t('impressum.rep')), e($c['ceo'])) ?></p>

    <h2><?= t('impressum.h_contact') ?></h2>
    <p>
      <?= t('impressum.l_phone') ?>: <?= e($k['phone']) ?><br>
      <?= t('impressum.l_fax') ?>: <?= e($k['fax']) ?><br>
      <?= t('impressum.l_email') ?>: <a href="mailto:<?= e($k['email']) ?>"><?= e($k['email']) ?></a>
    </p>

    <h2><?= t('impressum.h_register') ?></h2>
    <p>
      <?= t('impressum.register_court') ?><br>
      <?= sprintf(e(t('impressum.register_code')), e($c['reg_code'])) ?><br>
      <?= sprintf(e(t('impressum.register_vat')), e($c['vat_id'])) ?>
    </p>

    <h2><?= t('impressum.h_content') ?></h2>
    <p><?= sprintf(e(t('impressum.content')), e($c['ceo']), e($c['legal_name'])) ?></p>

    <h2><?= t('impressum.h_odr') ?></h2>
    <p><?= t('impressum.odr') ?></p>

    <h2><?= t('impressum.h_liab_content') ?></h2>
    <p><?= t('impressum.liab_content') ?></p>

    <h2><?= t('impressum.h_liab_links') ?></h2>
    <p><?= t('impressum.liab_links') ?></p>

    <h2><?= t('impressum.h_copyright') ?></h2>
    <p><?= t('impressum.copyright') ?></p>
  </div>
</section>

<?php require __DIR__ . '/partials/footer.php'; ?>
