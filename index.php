<?php
require_once __DIR__ . '/inc/i18n.php';
$slug = 'index.php';
$page_title = t('meta.home.title');
$page_desc  = t('meta.home.desc');
require __DIR__ . '/partials/head.php';
?>

<section class="hero wrap">
  <div class="hero-grid">
    <div>
      <span class="eyebrow"><?= t('home.hero_eyebrow') ?></span>
      <h1><?= t('home.hero_title') ?></h1>
      <p class="lead"><?= t('home.hero_lead') ?></p>
      <div class="btn-row">
        <a class="btn btn-primary" href="/kontakt.php"><?= t('common.cta_project') ?></a>
        <a class="btn btn-ghost" href="/serielle-sanierung.php"><?= t('home.hero_cta2') ?></a>
      </div>
      <div class="badge-row">
        <?php foreach (ta('home.hero_badges') as $b): ?><span><?= $b ?></span><?php endforeach; ?>
      </div>
    </div>
    <div class="panel-stack" aria-hidden="true">
      <i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i>
    </div>
  </div>
</section>

<section class="section section--alt">
  <div class="wrap">
    <div class="section-head">
      <span class="eyebrow"><?= t('home.offer_eyebrow') ?></span>
      <h2><?= t('home.offer_title') ?></h2>
      <p class="lead"><?= t('home.offer_lead') ?></p>
    </div>
    <div class="grid cols-3">
      <?php foreach (ta('home.offer_cards') as [$ct, $cd]): ?>
        <div class="card"><h3><?= $ct ?></h3><p><?= $cd ?></p></div>
      <?php endforeach; ?>
    </div>
    <div class="btn-row">
      <a class="btn btn-ghost" href="/fassadenelemente.php"><?= t('home.offer_cta') ?></a>
    </div>
  </div>
</section>

<section class="section">
  <div class="wrap split">
    <div>
      <span class="eyebrow"><?= t('home.why_eyebrow') ?></span>
      <h2><?= t('home.why_title') ?></h2>
      <p><?= t('home.why_body') ?></p>
    </div>
    <div>
      <span class="eyebrow"><?= t('home.why_drivers_eyebrow') ?></span>
      <ul class="check">
        <?php foreach (ta('home.why_drivers') as $li): ?><li><?= $li ?></li><?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>

<section class="section section--tint">
  <div class="wrap">
    <div class="section-head center">
      <span class="eyebrow"><?= t('home.process_eyebrow') ?></span>
      <h2><?= t('home.process_title') ?></h2>
    </div>
    <ol class="steps">
      <?php foreach (ta('home.process_steps') as [$st, $sp]): ?>
        <li><h3><?= $st ?></h3><p><?= $sp ?></p></li>
      <?php endforeach; ?>
    </ol>
  </div>
</section>

<section class="section">
  <div class="wrap">
    <div class="section-head">
      <span class="eyebrow"><?= t('home.stats_eyebrow') ?></span>
      <h2><?= t('home.stats_title') ?></h2>
      <p class="lead"><?= t('home.stats_lead') ?></p>
    </div>
    <div class="stat-row">
      <?php foreach (ta('common.stats') as [$v, $l]): ?>
        <div class="stat"><b><?= $v ?></b><span><?= $l ?></span></div>
      <?php endforeach; ?>
    </div>
    <div class="btn-row">
      <a class="btn btn-ghost" href="/ueber-uns.php"><?= t('home.stats_cta') ?></a>
    </div>
  </div>
</section>

<section class="section section--alt">
  <div class="wrap">
    <div class="section-head">
      <span class="eyebrow"><?= t('home.ref_eyebrow') ?></span>
      <h2><?= t('home.ref_title') ?></h2>
      <p class="lead"><?= t('home.ref_lead') ?></p>
    </div>
    <div class="grid cols-2">
      <?php
      require __DIR__ . '/inc/projects.php';
      foreach (array_slice($PROJECTS, 0, 2) as $p) {
          include __DIR__ . '/partials/project-card.php';
      }
      ?>
    </div>
    <div class="btn-row">
      <a class="btn btn-ghost" href="/referenzen.php"><?= t('home.ref_cta') ?></a>
    </div>
  </div>
</section>

<section class="section section--dark">
  <div class="wrap cta-band">
    <div>
      <h2><?= t('home.final_title') ?></h2>
      <p><?= t('home.final_body') ?></p>
    </div>
    <a class="btn btn-primary" href="/kontakt.php"><?= t('common.cta_inquiry') ?></a>
  </div>
</section>

<?php require __DIR__ . '/partials/footer.php'; ?>
