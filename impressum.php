<?php
$slug = 'impressum.php';
$page_title = 'Impressum';
$page_desc = 'Impressum und Anbieterkennzeichnung für seriell-sanierung.de.';
require __DIR__ . '/partials/head.php';
?>

<section class="section">
  <div class="wrap prose" style="max-width:52rem">
    <span class="eyebrow">Rechtliches</span>
    <h1>Impressum</h1>

    <div class="callout">
      <b>Bitte vor Livegang prüfen.</b> Dieser Entwurf folgt der üblichen Struktur nach
      § 5 DDG (Digitale-Dienste-Gesetz) und ist <b>keine Rechtsberatung</b>. Die
      Angaben zum Diensteanbieter müssen von der betreibenden Gesellschaft bestätigt
      und die Platzhalter <code>[…]</code> ersetzt werden – insbesondere, falls
      seriell-sanierung.de nicht von der Estnor OÜ selbst, sondern von einer
      deutschen Gesellschaft betrieben wird.
    </div>

    <h2>Diensteanbieter</h2>
    <p>
      <?= e($SITE['company']['legal_name']) ?><br>
      <?= e($SITE['company']['street']) ?><br>
      <?= e($SITE['company']['zip_city']) ?><br>
      <?= e($SITE['company']['region']) ?>
    </p>

    <h2>Vertretungsberechtigte Person</h2>
    <p><?= e($SITE['company']['ceo']) ?></p>

    <h2>Kontakt</h2>
    <p>
      Telefon: <?= e($SITE['contact']['phone']) ?><br>
      E-Mail: <a href="mailto:<?= e($SITE['contact']['email']) ?>"><?= e($SITE['contact']['email']) ?></a>
    </p>

    <h2>Registereintrag</h2>
    <p>
      Handelsregister / Äriregister: <?= e($SITE['company']['reg_code']) ?><br>
      Umsatzsteuer-Identifikationsnummer: <?= e($SITE['company']['vat_id']) ?>
    </p>

    <h2>Verantwortlich für den Inhalt</h2>
    <p>[Name und Anschrift der inhaltlich verantwortlichen Person, sofern abweichend]</p>

    <h2>EU-Streitschlichtung</h2>
    <p>
      Die Europäische Kommission stellt eine Plattform zur Online-Streitbeilegung (OS)
      bereit: <a href="https://ec.europa.eu/consumers/odr/" rel="noopener">https://ec.europa.eu/consumers/odr/</a>.
      Wir sind nicht verpflichtet und nicht bereit, an einem Streitbeilegungsverfahren
      vor einer Verbraucherschlichtungsstelle teilzunehmen.
    </p>

    <h2>Haftung für Inhalte</h2>
    <p>Als Diensteanbieter sind wir für eigene Inhalte auf diesen Seiten nach den
      allgemeinen Gesetzen verantwortlich. Wir sind nicht verpflichtet, übermittelte
      oder gespeicherte fremde Informationen zu überwachen. Verpflichtungen zur
      Entfernung oder Sperrung der Nutzung von Informationen nach den allgemeinen
      Gesetzen bleiben unberührt.</p>

    <h2>Haftung für Links</h2>
    <p>Unser Angebot enthält Links zu externen Websites Dritter, auf deren Inhalte wir
      keinen Einfluss haben. Für die Inhalte der verlinkten Seiten ist stets der
      jeweilige Anbieter oder Betreiber verantwortlich.</p>

    <h2>Urheberrecht</h2>
    <p>Die durch die Seitenbetreiber erstellten Inhalte und Werke auf diesen Seiten
      unterliegen dem Urheberrecht. Beiträge Dritter sind als solche gekennzeichnet.</p>
  </div>
</section>

<?php require __DIR__ . '/partials/footer.php'; ?>
