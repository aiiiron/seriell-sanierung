<?php
require_once __DIR__ . '/inc/i18n.php';
$slug = 'ueber-uns.php';
$page_title = t('meta.about.title');
$page_desc  = t('meta.about.desc');
require __DIR__ . '/partials/head.php';
?>

<section class="section">
  <div class="wrap">
    <div class="section-head">
      <span class="eyebrow"><?= t('about.eyebrow') ?></span>
      <h1><?= t('about.title') ?></h1>
      <p class="lead"><?= t('about.lead') ?></p>
    </div>

    <div class="stat-row">
      <?php foreach (ta('common.stats') as [$v, $l]): ?>
        <div class="stat"><b><?= $v ?></b><span><?= $l ?></span></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section section--alt">
  <div class="wrap split">
    <div>
      <span class="eyebrow"><?= t('about.brings_eyebrow') ?></span>
      <h2><?= t('about.brings_title') ?></h2>
      <ul class="check">
        <?php foreach (ta('about.brings') as $li): ?><li><?= $li ?></li><?php endforeach; ?>
      </ul>
    </div>
    <div>
      <span class="eyebrow"><?= t('about.roles_eyebrow') ?></span>
      <h2><?= t('about.roles_title') ?></h2>
      <p><?= t('about.roles_p1') ?></p>
      <p><?= t('about.roles_p2') ?></p>
    </div>
  </div>
</section>

<section class="section">
  <div class="wrap split">
    <div>
      <span class="eyebrow"><?= t('about.origin_eyebrow') ?></span>
      <h2><?= t('about.origin_title') ?></h2>
      <p><?= t('about.origin_body') ?></p>
    </div>
    <div>
      <span class="eyebrow"><?= t('about.proof_eyebrow') ?></span>
      <ul class="check">
        <?php foreach (ta('about.proof') as $li): ?><li><?= $li ?></li><?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>

<section class="section section--tint">
  <div class="wrap">
    <div class="section-head">
      <span class="eyebrow"><?= t('about.exp_eyebrow') ?></span>
      <h2><?= t('about.exp_title') ?></h2>
      <p class="lead"><?= t('about.exp_lead') ?></p>
    </div>
    <div class="btn-row">
      <a class="btn btn-ghost" href="/referenzen.php"><?= t('about.exp_cta') ?></a>
    </div>
  </div>
</section>

<section class="section section--dark">
  <div class="wrap cta-band">
    <div>
      <h2><?= t('about.final_title') ?></h2>
      <p><?= t('about.final_body') ?></p>
    </div>
    <a class="btn btn-primary" href="/kontakt.php"><?= t('common.cta_contact') ?></a>
  </div>
</section>

<?php require __DIR__ . '/partials/footer.php'; ?>
