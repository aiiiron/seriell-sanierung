<?php require_once __DIR__ . '/../inc/site.php'; require_once __DIR__ . '/../inc/i18n.php'; ?>
<header class="site-header">
  <div class="wrap bar">
    <a class="brand" href="/">
      <img class="brand-logo" src="/media/estnor-logo-rgb.png" width="505" height="171"
           alt="EstNor" fetchpriority="high">
      <span class="brand-caption"><?= e(t('common.brand_caption')) ?></span>
    </a>

    <div class="bar-right">
      <input type="checkbox" id="nav-toggle" class="nav-toggle" hidden>
      <label for="nav-toggle" class="nav-burger" aria-label="<?= e(t('common.menu')) ?>">
        <span></span><span></span><span></span>
      </label>

      <nav class="nav" aria-label="<?= e(t('common.nav_aria')) ?>">
        <ul>
          <?php foreach ($SITE['nav'] as $href): ?>
            <li><a href="/<?= e($href) ?>"<?= nav_active($href, $slug ?? '') ?>><?= e(t_nav($href)) ?></a></li>
          <?php endforeach; ?>
        </ul>
        <div class="lang-switch" role="group" aria-label="<?= e(t('common.lang_aria')) ?>">
          <?php foreach ($LANGS as $lc => $ln): ?>
            <a href="<?= e(lang_url($lc)) ?>" hreflang="<?= e($lc) ?>" lang="<?= e($lc) ?>"
               <?= $lc === $LANG ? 'aria-current="true"' : '' ?>><?= e(strtoupper($lc)) ?></a>
          <?php endforeach; ?>
        </div>
      </nav>
    </div>
  </div>
</header>
