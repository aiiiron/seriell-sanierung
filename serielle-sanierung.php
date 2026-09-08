<?php
require_once __DIR__ . '/inc/i18n.php';
$slug = 'serielle-sanierung.php';
$page_title = t('meta.ss.title');
$page_desc  = t('meta.ss.desc');
require __DIR__ . '/partials/head.php';
?>

<section class="section">
  <div class="wrap">
    <div class="section-head">
      <span class="eyebrow"><?= t('ss.eyebrow') ?></span>
      <h1><?= t('ss.title') ?></h1>
      <p class="lead"><?= t('ss.lead') ?></p>
    </div>

    <div class="split">
      <div>
        <h2><?= t('ss.concept_title') ?></h2>
        <p><?= t('ss.concept_p1') ?></p>
        <p><?= t('ss.concept_p2') ?></p>
      </div>
      <div>
        <h2><?= t('ss.benefits_title') ?></h2>
        <ul class="check">
          <?php foreach (ta('ss.benefits') as $li): ?><li><?= $li ?></li><?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="section section--tint">
  <div class="wrap">
    <div class="section-head center">
      <span class="eyebrow"><?= t('ss.how_eyebrow') ?></span>
      <h2><?= t('ss.how_title') ?></h2>
    </div>
    <ol class="steps">
      <?php foreach (ta('ss.how_steps') as [$st, $sp]): ?>
        <li><h3><?= $st ?></h3><p><?= $sp ?></p></li>
      <?php endforeach; ?>
    </ol>
  </div>
</section>

<section class="section">
  <div class="wrap split">
    <div>
      <span class="eyebrow"><?= t('ss.target_eyebrow') ?></span>
      <h2><?= t('ss.target_title') ?></h2>
      <p><?= t('ss.target_body') ?></p>
    </div>
    <div>
      <span class="eyebrow"><?= t('ss.funding_eyebrow') ?></span>
      <ul class="check">
        <?php foreach (ta('ss.funding') as $li): ?><li><?= $li ?></li><?php endforeach; ?>
      </ul>
      <div class="callout"><?= t('ss.funding_callout') ?></div>
    </div>
  </div>
</section>

<section class="section section--dark">
  <div class="wrap cta-band">
    <div>
      <h2><?= t('ss.final_title') ?></h2>
      <p><?= t('ss.final_body') ?></p>
    </div>
    <a class="btn btn-primary" href="/kontakt.php"><?= t('common.cta_contact') ?></a>
  </div>
</section>

<?php require __DIR__ . '/partials/footer.php'; ?>
