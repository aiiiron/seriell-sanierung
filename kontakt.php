<?php
/**
 * kontakt.php — Kontaktseite mit einfachem PHP-Mailversand.
 *
 * Formular postet auf sich selbst. Bei Erfolg/Fehler wird oben ein Hinweis
 * angezeigt und das Formular ggf. mit den Eingaben neu befüllt.
 *
 * Voraussetzung: PHP mail() ist auf dem Hosting aktiv (bei Hostinger i. d. R.
 * der Fall). Kommen Mails nicht an: SPF/DKIM prüfen oder SMTP-/Formulardienst.
 */
require_once __DIR__ . '/inc/site.php';
require_once __DIR__ . '/inc/i18n.php';

$form_status = null;      // 'ok' | 'err'
$form_msg    = '';
$in = ['name' => '', 'firma' => '', 'email' => '', 'telefon' => '', 'nachricht' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Honeypot: von Bots ausgefüllt, von Menschen nie sichtbar.
    if (!empty($_POST['website'] ?? '')) {
        $form_status = 'ok';
        $form_msg = t('contact.msg_honeypot');
    } else {
        foreach ($in as $k => $_) {
            $in[$k] = trim((string)($_POST[$k] ?? ''));
        }
        $errors = [];
        if ($in['name'] === '')                                 $errors[] = t('contact.msg_err_name');
        if (!filter_var($in['email'], FILTER_VALIDATE_EMAIL))   $errors[] = t('contact.msg_err_email');
        if (mb_strlen($in['nachricht']) < 10)                   $errors[] = t('contact.msg_err_msg');

        if ($errors) {
            $form_status = 'err';
            $form_msg = implode(' ', $errors);
        } else {
            $to      = $SITE['contact']['form_to'];
            $subject = t('contact.mail_subject');
            $body =
                t('contact.mail_intro') . "\n\n" .
                t('contact.mail_l_name')    . ": {$in['name']}\n" .
                t('contact.mail_l_company') . ": {$in['firma']}\n" .
                t('contact.mail_l_email')   . ": {$in['email']}\n" .
                t('contact.mail_l_phone')   . ": {$in['telefon']}\n\n" .
                t('contact.mail_l_message') . ":\n{$in['nachricht']}\n";
            $headers =
                "From: seriell-sanierung.de <no-reply@seriell-sanierung.de>\r\n" .
                "Reply-To: " . $in['email'] . "\r\n" .
                "Content-Type: text/plain; charset=UTF-8\r\n";

            if (@mail($to, '=?UTF-8?B?' . base64_encode($subject) . '?=', $body, $headers)) {
                $form_status = 'ok';
                $form_msg = t('contact.msg_sent');
                $in = array_map(fn($v) => '', $in); // Felder leeren
            } else {
                $form_status = 'err';
                $form_msg = sprintf(t('contact.msg_fail'), $SITE['contact']['email']);
            }
        }
    }
}

$slug = 'kontakt.php';
$page_title = t('meta.contact.title');
$page_desc  = t('meta.contact.desc');
require __DIR__ . '/partials/head.php';
?>

<section class="section">
  <div class="wrap split">
    <div>
      <span class="eyebrow"><?= t('contact.eyebrow') ?></span>
      <h1><?= t('contact.title') ?></h1>
      <p class="lead"><?= t('contact.lead') ?></p>

      <dl class="contact-dl">
        <div>
          <dt><?= t('contact.dl_email') ?></dt>
          <dd><a href="mailto:<?= e($SITE['contact']['email']) ?>"><?= e($SITE['contact']['email']) ?></a></dd>
        </div>
        <div>
          <dt><?= t('contact.dl_phone') ?></dt>
          <dd><a href="tel:<?= e($SITE['contact']['phone_href']) ?>"><?= e($SITE['contact']['phone']) ?></a></dd>
        </div>
        <div>
          <dt><?= t('contact.dl_address') ?></dt>
          <dd><?= e($SITE['company']['legal_name']) ?><br>
              <?= e($SITE['company']['street']) ?>, <?= e($SITE['company']['zip_city']) ?><br>
              <?= e($SITE['company']['region']) ?></dd>
        </div>
      </dl>

      <p><?= t('contact.note') ?></p>
    </div>

    <div class="card">
      <h2><?= t('contact.form_title') ?></h2>

      <?php if ($form_status === 'ok'): ?>
        <p class="form-ok"><?= e($form_msg) ?></p>
      <?php elseif ($form_status === 'err'): ?>
        <p class="form-err"><?= e($form_msg) ?></p>
      <?php endif; ?>

      <form class="contact-form" method="post" action="/kontakt.php" novalidate>
        <label><?= t('contact.form_name') ?>
          <input type="text" name="name" value="<?= e($in['name']) ?>" required>
        </label>
        <label><?= t('contact.form_company') ?>
          <input type="text" name="firma" value="<?= e($in['firma']) ?>">
        </label>
        <label><?= t('contact.form_email') ?>
          <input type="email" name="email" value="<?= e($in['email']) ?>" required>
        </label>
        <label><?= t('contact.form_phone') ?>
          <input type="text" name="telefon" value="<?= e($in['telefon']) ?>">
        </label>
        <label><?= t('contact.form_message') ?>
          <textarea name="nachricht" rows="6" required><?= e($in['nachricht']) ?></textarea>
        </label>
        <label class="hp" aria-hidden="true"><?= t('contact.form_hp') ?>
          <input type="text" name="website" tabindex="-1" autocomplete="off">
        </label>
        <button type="submit" class="btn btn-primary"><?= t('contact.form_submit') ?></button>
        <p class="form-note">
          <?= sprintf(
                e(t('contact.form_note')),
                '<a href="/datenschutz.php">' . e(t('contact.form_note_link')) . '</a>'
              ) ?>
        </p>
      </form>
    </div>
  </div>
</section>

<?php require __DIR__ . '/partials/footer.php'; ?>
