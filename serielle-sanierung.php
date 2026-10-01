<?php
require_once __DIR__ . '/inc/i18n.php';
$slug = 'serielle-sanierung.php';
$page_title = t('meta.ss.title');
$page_desc  = t('meta.ss.desc');
require __DIR__ . '/partials/head.php';
?>

<section class="hero">
  <picture class="hero-bg" aria-hidden="true">
    <source srcset="/media/process/hero.webp" type="image/webp">
    <img src="/media/process/hero.jpg" width="1400" height="735" alt="" fetchpriority="high" decoding="async">
  </picture>
  <div class="hero-inner wrap">
    <div class="breadcrumb"><a href="/"><?= t('ss.crumb') ?></a> / <span><?= t('ss.label') ?></span></div>
    <span class="eyebrow"><?= t('ss.eyebrow') ?></span>
    <h1 class="hero-title">
      <span><?= t('ss.hero_h1_line1') ?></span>
      <span class="hero-accent"><?= t('ss.hero_h1_accent') ?></span>
    </h1>
    <p class="lead"><?= t('ss.lead') ?></p>
    <div class="btn-row">
      <a class="btn btn-primary" href="/kontakt.php"><?= t('common.cta_contact') ?></a>
      <a class="btn btn-ghost" href="/referenzen.php"><?= t('ss.hero_cta2') ?></a>
    </div>
  </div>
</section>

<section class="section">
  <div class="wrap split">
    <div>
      <h2><?= t('ss.why_title') ?></h2>
      <ul class="check">
        <?php foreach (ta('ss.why_items') as $li): ?><li><?= $li ?></li><?php endforeach; ?>
      </ul>
    </div>
    <div>
      <h2><?= t('ss.provides_title') ?></h2>
      <ul class="check">
        <?php foreach (ta('ss.provides_items') as $li): ?><li><?= $li ?></li><?php endforeach; ?>
      </ul>
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

<section class="section section--alt">
  <div class="wrap split">
    <div>
      <span class="eyebrow"><?= t('ss.kredex_eyebrow') ?></span>
      <h2><?= t('ss.kredex_title') ?></h2>
      <p><?= t('ss.kredex_p1') ?></p>
      <p><?= t('ss.kredex_p2') ?></p>
    </div>
    <div>
      <span class="eyebrow"><?= t('ss.speed_eyebrow') ?></span>
      <h2><?= t('ss.speed_title') ?></h2>
      <p><?= t('ss.speed_body') ?></p>
      <div class="callout"><b><?= t('ss.speed_callout_label') ?></b> <?= t('ss.speed_callout_text') ?></div>
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
