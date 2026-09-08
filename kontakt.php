<?php
/**
 * kontakt.php — Kontaktseite mit einfachem PHP-Mailversand.
 *
 * Ablauf: Formular postet auf sich selbst. Bei Erfolg/Fehler wird oben ein
 * Hinweis angezeigt und das Formular ggf. mit den Eingaben neu befüllt.
 *
 * Voraussetzung: die PHP-Funktion mail() ist auf dem Hosting aktiv (bei
 * Hostinger Shared Hosting i. d. R. der Fall). Falls Mails nicht ankommen:
 * SPF/DKIM der Domain prüfen oder einen SMTP-/Formulardienst einsetzen.
 */
require __DIR__ . '/inc/site.php';

$form_status = null;      // 'ok' | 'err'
$form_msg    = '';
$in = ['name' => '', 'firma' => '', 'email' => '', 'telefon' => '', 'nachricht' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Honeypot: von Bots ausgefüllt, von Menschen nie sichtbar.
    if (!empty($_POST['website'] ?? '')) {
        $form_status = 'ok';
        $form_msg = 'Danke für Ihre Nachricht.';
    } else {
        foreach ($in as $k => $_) {
            $in[$k] = trim((string)($_POST[$k] ?? ''));
        }
        $errors = [];
        if ($in['name'] === '')                                   $errors[] = 'Bitte Namen angeben.';
        if (!filter_var($in['email'], FILTER_VALIDATE_EMAIL))     $errors[] = 'Bitte gültige E-Mail-Adresse angeben.';
        if (mb_strlen($in['nachricht']) < 10)                     $errors[] = 'Bitte eine kurze Nachricht schreiben.';

        if ($errors) {
            $form_status = 'err';
            $form_msg = implode(' ', $errors);
        } else {
            $to      = $SITE['contact']['form_to'];
            $subject = 'Anfrage über seriell-sanierung.de';
            $body =
                "Neue Anfrage über das Kontaktformular seriell-sanierung.de\n\n" .
                "Name:     {$in['name']}\n" .
                "Firma:    {$in['firma']}\n" .
                "E-Mail:   {$in['email']}\n" .
                "Telefon:  {$in['telefon']}\n\n" .
                "Nachricht:\n{$in['nachricht']}\n";
            $headers =
                "From: seriell-sanierung.de <no-reply@seriell-sanierung.de>\r\n" .
                "Reply-To: " . $in['email'] . "\r\n" .
                "Content-Type: text/plain; charset=UTF-8\r\n";

            if (@mail($to, '=?UTF-8?B?' . base64_encode($subject) . '?=', $body, $headers)) {
                $form_status = 'ok';
                $form_msg = 'Vielen Dank – Ihre Nachricht ist eingegangen. Wir melden uns zeitnah.';
                $in = array_map(fn($v) => '', $in); // Felder leeren
            } else {
                $form_status = 'err';
                $form_msg = 'Der Versand hat nicht geklappt. Bitte schreiben Sie uns direkt an '
                          . $SITE['contact']['email'] . '.';
            }
        }
    }
}

$slug = 'kontakt.php';
$page_title = 'Kontakt';
$page_desc = 'Kontakt zu EstNor für serielle Fassadensanierung in Deutschland – für Bau- und Sanierungsunternehmen, Planungsbüros und Wohnungsunternehmen.';
require __DIR__ . '/partials/head.php';
?>

<section class="section">
  <div class="wrap split">
    <div>
      <span class="eyebrow">Kontakt</span>
      <h1>Sprechen wir über Ihr serielles Sanierungsprojekt</h1>
      <p class="lead">
        Ob Bau- oder Sanierungsunternehmen, Planungsbüro oder Wohnungsunternehmen:
        Schicken Sie uns Eckdaten zum Gebäude – Baujahr, Wohneinheiten, Fassadenfläche,
        Zeithorizont. Wir antworten mit einer ersten Einschätzung zur Elementfertigung.
      </p>

      <dl class="contact-dl">
        <div>
          <dt>E-Mail</dt>
          <dd><a href="mailto:<?= e($SITE['contact']['email']) ?>"><?= e($SITE['contact']['email']) ?></a></dd>
        </div>
        <div>
          <dt>Telefon</dt>
          <dd><a href="tel:<?= e($SITE['contact']['phone_href']) ?>"><?= e($SITE['contact']['phone']) ?></a></dd>
        </div>
        <div>
          <dt>Hersteller</dt>
          <dd><?= e($SITE['company']['legal_name']) ?>, <?= e($SITE['company']['street']) ?>,
              <?= e($SITE['company']['zip_city']) ?>, <?= e($SITE['company']['region']) ?></dd>
        </div>
      </dl>

      <div class="callout">
        <b>Platzhalter:</b> <?= e($SITE['contact']['de_note']) ?>
      </div>
    </div>

    <div class="card">
      <h2>Nachricht senden</h2>

      <?php if ($form_status === 'ok'): ?>
        <p class="form-ok"><?= e($form_msg) ?></p>
      <?php elseif ($form_status === 'err'): ?>
        <p class="form-err"><?= e($form_msg) ?></p>
      <?php endif; ?>

      <form class="contact-form" method="post" action="/kontakt.php" novalidate>
        <label>Name*
          <input type="text" name="name" value="<?= e($in['name']) ?>" required>
        </label>
        <label>Unternehmen
          <input type="text" name="firma" value="<?= e($in['firma']) ?>">
        </label>
        <label>E-Mail*
          <input type="email" name="email" value="<?= e($in['email']) ?>" required>
        </label>
        <label>Telefon
          <input type="text" name="telefon" value="<?= e($in['telefon']) ?>">
        </label>
        <label>Nachricht*
          <textarea name="nachricht" rows="6" required><?= e($in['nachricht']) ?></textarea>
        </label>
        <label class="hp" aria-hidden="true">Bitte frei lassen
          <input type="text" name="website" tabindex="-1" autocomplete="off">
        </label>
        <button type="submit" class="btn btn-primary">Absenden</button>
        <p class="form-note">Mit dem Absenden werden Ihre Angaben zur Bearbeitung der
          Anfrage verarbeitet. Siehe <a href="/datenschutz.php">Datenschutz</a>.</p>
      </form>
    </div>
  </div>
</section>

<?php require __DIR__ . '/partials/footer.php'; ?>
