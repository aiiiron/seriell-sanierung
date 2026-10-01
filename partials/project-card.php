<?php
/**
 * partials/project-card.php — one reference-building card.
 * Expects $p (an entry from inc/projects.php: slug, name, place).
 */
$alt = $p['name'] . ', ' . $p['place'] . ' — ' . t('ref.photo_alt');
?>
<article class="project-card">
  <picture class="project-figure">
    <source srcset="/media/references/<?= e($p['slug']) ?>.webp" type="image/webp">
    <img src="/media/references/<?= e($p['slug']) ?>.jpg" width="900" height="376"
         alt="<?= e($alt) ?>" loading="lazy" decoding="async">
  </picture>
  <div class="project-body">
    <p class="meta"><?= e($p['place']) ?>, <?= e(t('ref.country')) ?></p>
    <h3><?= e($p['name']) ?></h3>
    <span class="tag"><?= e(t('ref.tag')) ?></span>
  </div>
</article>
