<?php
require_once __DIR__ . '/inc/i18n.php';
$slug = 'fassadenelemente.php';
$page_title = t('meta.fe.title');
$page_desc  = t('meta.fe.desc');
require __DIR__ . '/partials/head.php';

// Marker-Positionen (in % der Bildbreite/-höhe) über dem Explosionsdiagramm,
// eine pro Schicht, in derselben Reihenfolge wie fe.buildup / die Legende.
$diagramMarks = [
    [9.5, 45.3], [12.5, 70.7], [23, 56.6], [34.5, 59.4], [47, 56.6],
    [53, 53.7], [64, 70.7], [76, 42.4], [88, 42.4], [93, 50.2],
];
?>

<section class="section page-hero">
  <div class="wrap">
    <div class="breadcrumb"><a href="/"><?= t('fe.crumb') ?></a> / <span><?= t('fe.label') ?></span></div>
    <span class="eyebrow"><?= t('fe.eyebrow') ?></span>
    <h1><?= t('fe.title') ?></h1>
    <p class="lead"><?= t('fe.lead') ?></p>
  </div>
</section>

<section class="section">
  <div class="wrap split">
    <div>
      <span class="eyebrow"><?= t('fe.scope_eyebrow') ?></span>
      <h2><?= t('fe.scope_title') ?></h2>
      <p><?= t('fe.scope_p1') ?></p>
      <p><?= t('fe.scope_p2') ?></p>
    </div>
    <div>
      <h3><?= t('fe.scope_list_h3') ?></h3>
      <ul class="check">
        <?php foreach (ta('fe.scope_items') as $li): ?><li><?= $li ?></li><?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>

<section class="section section--alt">
  <div class="wrap">
    <div class="section-head">
      <span class="eyebrow"><?= t('fe.prep_eyebrow') ?></span>
      <h2><?= t('fe.prep_title') ?></h2>
      <p class="lead"><?= t('fe.prep_lead') ?></p>
    </div>
    <div class="grid cols-2">
      <div class="card">
        <h3><?= t('fe.prep_survey_title') ?></h3>
        <ul class="check">
          <?php foreach (ta('fe.prep_survey_items') as $li): ?><li><?= $li ?></li><?php endforeach; ?>
        </ul>
      </div>
      <div class="card">
        <h3><?= t('fe.prep_arch_title') ?></h3>
        <ul class="check">
          <?php foreach (ta('fe.prep_arch_items') as $li): ?><li><?= $li ?></li><?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="wrap">
    <div class="section-head">
      <span class="eyebrow"><?= t('fe.grade_eyebrow') ?></span>
      <h2><?= t('fe.buildup_title') ?></h2>
    </div>
    <figure class="diagram-figure">
      <img src="/media/process/diagram.jpg" width="1400" height="990" alt="<?= e(t('fe.diagram_alt')) ?>" loading="lazy" decoding="async">
      <div class="diagram-marks" aria-hidden="true">
        <?php foreach ($diagramMarks as $i => [$x, $y]): ?>
          <span class="diagram-mark" style="left:<?= $x ?>%;top:<?= $y ?>%"><?= $i + 1 ?></span>
        <?php endforeach; ?>
      </div>
    </figure>
    <ol class="diagram-legend">
      <?php foreach (ta('fe.buildup') as $i => $li): ?>
        <li><b><?= $i + 1 ?></b><span><?= $li ?></span></li>
      <?php endforeach; ?>
    </ol>
  </div>
</section>

<section class="section section--tint">
  <div class="wrap">
    <div class="section-head">
      <span class="eyebrow"><?= t('fe.factory_eyebrow') ?></span>
      <h2><?= t('fe.factory_title') ?></h2>
      <p class="lead"><?= t('fe.factory_lead') ?></p>
    </div>
    <div class="photo-row">
      <?php foreach (ta('fe.factory_alts') as $i => $alt): $n = $i + 1; ?>
        <figure class="photo-card">
          <picture>
            <source srcset="/media/process/factory-<?= $n ?>.webp" type="image/webp">
            <img src="/media/process/factory-<?= $n ?>.jpg" alt="<?= e($alt) ?>" loading="lazy" decoding="async">
          </picture>
        </figure>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section">
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

<section class="section section--alt" id="steps">
  <div class="wrap">
    <div class="section-head center">
      <span class="eyebrow"><?= t('fe.montage_eyebrow') ?></span>
      <h2><?= t('fe.montage_title') ?></h2>
      <p class="lead"><?= t('fe.montage_lead') ?></p>
    </div>
    <ol class="process-steps">
      <?php foreach (ta('fe.montage_cards') as $i => [$ct, $cd]): $n = $i + 1; ?>
        <li>
          <figure><img src="/media/process/step-<?= $n ?>.jpg" alt="" loading="lazy" decoding="async"></figure>
          <span class="process-num"><?= str_pad((string) $n, 2, '0', STR_PAD_LEFT) ?></span>
          <h3><?= $ct ?></h3>
          <p><?= $cd ?></p>
        </li>
      <?php endforeach; ?>
    </ol>
  </div>
</section>

<section class="section">
  <div class="wrap">
    <div class="section-head">
      <span class="eyebrow"><?= t('fe.video_eyebrow') ?></span>
      <h2><?= t('fe.video_title') ?></h2>
      <p class="lead"><?= t('fe.video_lead') ?></p>
    </div>
    <video class="process-video" controls preload="metadata" playsinline poster="/media/process/video-poster.jpg">
      <source src="/media/process/renovation-process.mp4" type="video/mp4">
    </video>
  </div>
</section>

<section class="section section--tint">
  <div class="wrap">
    <div class="section-head">
      <span class="eyebrow"><?= t('fe.site_eyebrow') ?></span>
      <h2><?= t('fe.site_title') ?></h2>
      <p class="lead"><?= t('fe.site_lead') ?></p>
    </div>
    <div class="photo-mosaic">
      <?php $siteAlt = t('fe.site_alt'); for ($n = 1; $n <= 14; $n++): ?>
        <a href="/media/process/site-<?= $n ?>.jpg" target="_blank" rel="noopener">
          <picture>
            <source srcset="/media/process/site-<?= $n ?>.webp" type="image/webp">
            <img src="/media/process/site-<?= $n ?>.jpg" alt="<?= e($siteAlt) ?>" loading="<?= $n <= 4 ? 'eager' : 'lazy' ?>" decoding="async">
          </picture>
        </a>
      <?php endfor; ?>
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
    <div class="btn-row">
      <a class="btn btn-primary" href="/kontakt.php"><?= t('common.cta_inquiry') ?></a>
      <a class="btn btn-ghost" href="/referenzen.php"><?= t('fe.final_secondary') ?></a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/partials/footer.php'; ?>
