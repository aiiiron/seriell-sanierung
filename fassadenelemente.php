<?php
require_once __DIR__ . '/inc/i18n.php';
$slug = 'fassadenelemente.php';
$page_title = t('meta.fe.title');
$page_desc  = t('meta.fe.desc');
require __DIR__ . '/partials/head.php';
?>

<section class="section">
  <div class="wrap">
    <div class="section-head">
      <span class="eyebrow"><?= t('fe.eyebrow') ?></span>
      <h1><?= t('fe.title') ?></h1>
      <p class="lead"><?= t('fe.lead') ?></p>
    </div>

    <div class="split">
      <div>
        <h2><?= t('fe.buildup_title') ?></h2>
        <ul class="buildup">
          <?php foreach (ta('fe.buildup') as $i => $li): ?>
            <li><b><?= $i + 1 ?></b><span><?= $li ?></span></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="panel-stack" aria-hidden="true">
        <i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i>
      </div>
    </div>
  </div>
</section>

<section class="section section--alt">
  <div class="wrap">
    <div class="section-head">
      <span class="eyebrow"><?= t('fe.grade_eyebrow') ?></span>
      <h2><?= t('fe.grade_title') ?></h2>
    </div>
    <div class="grid cols-3">
      <?php foreach (ta('fe.grade_cards') as [$ct, $cd]): ?>
        <div class="card"><h3><?= $ct ?></h3><p><?= $cd ?></p></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section section--tint">
  <div class="wrap">
    <div class="section-head center">
      <span class="eyebrow"><?= t('fe.montage_eyebrow') ?></span>
      <h2><?= t('fe.montage_title') ?></h2>
    </div>
    <div class="grid cols-3">
      <?php foreach (ta('fe.montage_cards') as [$ct, $cd]): ?>
        <div class="card card--tint"><h3><?= $ct ?></h3><p><?= $cd ?></p></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section">
  <div class="wrap split">
    <div>
      <span class="eyebrow"><?= t('fe.logistics_eyebrow') ?></span>
      <h2><?= t('fe.logistics_title') ?></h2>
      <p><?= t('fe.logistics_body') ?></p>
    </div>
    <div>
      <span class="eyebrow"><?= t('fe.quality_eyebrow') ?></span>
      <ul class="check">
        <?php foreach (ta('fe.quality') as $li): ?><li><?= $li ?></li><?php endforeach; ?>
      </ul>
      <div class="callout"><?= t('fe.quality_callout') ?></div>
    </div>
  </div>
</section>

<section class="section section--dark">
  <div class="wrap cta-band">
    <div>
      <h2><?= t('fe.final_title') ?></h2>
      <p><?= t('fe.final_body') ?></p>
    </div>
    <a class="btn btn-primary" href="/kontakt.php"><?= t('common.cta_inquiry') ?></a>
  </div>
</section>

<?php require __DIR__ . '/partials/footer.php'; ?>
