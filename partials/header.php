<?php require_once __DIR__ . '/../inc/site.php'; /* falls direkt eingebunden */ ?>
<header class="site-header">
  <div class="wrap bar">
    <a class="brand" href="/">
      <svg class="brand-mark" viewBox="0 0 32 32" aria-hidden="true">
        <rect width="32" height="32" rx="7" fill="#14352a"/>
        <g fill="none" stroke="#e0912f" stroke-width="2">
          <rect x="7" y="7" width="8" height="18" rx="1"/>
          <rect x="17" y="7" width="8" height="8" rx="1"/>
          <rect x="17" y="17" width="8" height="8" rx="1"/>
        </g>
      </svg>
      <span class="brand-text">
        <strong>seriell&#8209;sanierung.de</strong>
        <span>Fassadenelemente von EstNor</span>
      </span>
    </a>

    <input type="checkbox" id="nav-toggle" class="nav-toggle" hidden>
    <label for="nav-toggle" class="nav-burger" aria-label="Menü">
      <span></span><span></span><span></span>
    </label>

    <nav class="nav" aria-label="Hauptnavigation">
      <ul>
        <?php foreach ($SITE['nav'] as $href => $label): ?>
          <li><a href="/<?= e($href === 'index.php' ? '' : $href) ?>"<?= nav_active($href, $slug ?? '') ?>><?= e($label) ?></a></li>
        <?php endforeach; ?>
      </ul>
      <a class="btn btn-primary nav-cta" href="/kontakt.php">Anfrage stellen</a>
    </nav>
  </div>
</header>
