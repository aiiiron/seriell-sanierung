<?php
/**
 * partials/project-card.php — erwartet $p (ein Eintrag aus inc/projects.php).
 * Texte kommen sprachabhängig aus lang/*.php unter 'projects.<key>'.
 * Schematische SVG-Illustration statt Foto, klar als Skizze erkennbar.
 */
$fig  = $p['fig'] ?? 1;
$pk   = 'projects.' . ($p['key'] ?? '');
$meta = t($pk . '.meta');
$title = t($pk . '.title');
$tags  = ta($pk . '.tags');
$body  = t($pk . '.body');
$pstats = ta($pk . '.stats');
?>
<article class="project-card">
  <div class="project-figure" aria-hidden="true">
    <?php if ($fig === 1): ?>
      <svg viewBox="0 0 200 150" xmlns="http://www.w3.org/2000/svg">
        <rect width="200" height="150" fill="#e9efe7"/>
        <g fill="none" stroke="#1f4d3a" stroke-width="2">
          <?php for ($x = 20; $x < 180; $x += 32): ?>
            <?php for ($y = 20; $y < 130; $y += 34): ?>
              <rect x="<?= $x ?>" y="<?= $y ?>" width="26" height="28" rx="2"/>
              <rect x="<?= $x + 4 ?>" y="<?= $y + 5 ?>" width="9" height="18" fill="#1f4d3a" opacity=".25"/>
            <?php endfor; ?>
          <?php endfor; ?>
        </g>
      </svg>
    <?php elseif ($fig === 2): ?>
      <svg viewBox="0 0 200 150" xmlns="http://www.w3.org/2000/svg">
        <rect width="200" height="150" fill="#e9efe7"/>
        <path d="M40 55 L100 25 L160 55 Z" fill="#dd8a2c"/>
        <rect x="45" y="55" width="110" height="80" fill="none" stroke="#1f4d3a" stroke-width="2"/>
        <g fill="#1f4d3a" opacity=".25">
          <rect x="58" y="68" width="18" height="22"/><rect x="91" y="68" width="18" height="22"/>
          <rect x="124" y="68" width="18" height="22"/><rect x="58" y="100" width="18" height="22"/>
          <rect x="124" y="100" width="18" height="22"/>
        </g>
        <rect x="91" y="100" width="18" height="35" fill="#1f4d3a" opacity=".4"/>
      </svg>
    <?php elseif ($fig === 3): ?>
      <svg viewBox="0 0 200 150" xmlns="http://www.w3.org/2000/svg">
        <rect width="200" height="150" fill="#e9efe7"/>
        <rect x="45" y="35" width="110" height="95" fill="none" stroke="#b96f1c"
              stroke-width="2" stroke-dasharray="7 6"/>
        <text x="100" y="90" text-anchor="middle" font-family="Bricolage Grotesque, sans-serif"
              font-size="15" fill="#b96f1c">?</text>
      </svg>
    <?php else: ?>
      <svg viewBox="0 0 200 150" xmlns="http://www.w3.org/2000/svg">
        <rect width="200" height="150" fill="#e9efe7"/>
        <rect x="45" y="35" width="110" height="95" fill="none" stroke="#1f4d3a" stroke-width="2"/>
      </svg>
    <?php endif; ?>
  </div>
  <div class="project-body">
    <p class="meta"><?= e($meta) ?></p>
    <h3><?= e($title) ?></h3>
    <?php if ($tags): ?>
      <div class="tag-row">
        <?php foreach ($tags as $tg): ?><span class="tag"><?= $tg ?></span><?php endforeach; ?>
      </div>
    <?php endif; ?>
    <p><?= e($body) ?></p>
    <?php if ($pstats): ?>
      <div class="project-stats">
        <?php foreach ($pstats as [$v, $l]): ?>
          <div><b><?= e($v) ?></b><span><?= e($l) ?></span></div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
</article>
