<?php
$slug = 'datenschutz.php';
$page_title = 'Datenschutzerklärung';
$page_desc = 'Informationen zur Verarbeitung personenbezogener Daten auf seriell-sanierung.de nach DSGVO.';
require __DIR__ . '/partials/head.php';
?>

<section class="section">
  <div class="wrap prose" style="max-width:52rem">
    <span class="eyebrow">Rechtliches</span>
    <h1>Datenschutzerklärung</h1>

    <div class="callout">
      <b>Bitte vor Livegang prüfen und anpassen.</b> Dieser Entwurf beschreibt die
      Standard-Datenverarbeitung einer Informations-Website mit Kontaktformular. Er ist
      <b>keine Rechtsberatung</b>. Vor Veröffentlichung sind mindestens zu prüfen:
      verantwortliche Stelle, tatsächlich eingesetztes Hosting (Server-Standort,
      Auftragsverarbeitungsvertrag), Schriftauslieferung (siehe Abschnitt „Schriftarten“),
      sowie ob weitere Dienste (Analyse, Karten, Video) eingebunden werden.
    </div>

    <h2>1. Verantwortliche Stelle</h2>
    <p>
      <?= e($SITE['company']['legal_name']) ?><br>
      <?= e($SITE['company']['street']) ?>, <?= e($SITE['company']['zip_city']) ?>,
      <?= e($SITE['company']['region']) ?><br>
      E-Mail: <a href="mailto:<?= e($SITE['contact']['email']) ?>"><?= e($SITE['contact']['email']) ?></a><br>
      Telefon: <?= e($SITE['contact']['phone']) ?>
    </p>
    <p>[Falls eine deutsche Betreibergesellschaft verantwortlich ist, hier deren
      vollständige Angaben einsetzen. Ggf. Datenschutzbeauftragte:r ergänzen.]</p>

    <h2>2. Verarbeitung beim Besuch der Website (Server-Logs)</h2>
    <p>Beim Aufruf der Website werden durch den Hosting-Provider automatisch
      Informationen in Server-Logfiles gespeichert, die Ihr Browser übermittelt:
      IP-Adresse, Datum und Uhrzeit des Zugriffs, aufgerufene Seite/Datei, übertragene
      Datenmenge, Referrer-URL, Browser und Betriebssystem.</p>
    <p>Rechtsgrundlage ist Art. 6 Abs. 1 lit. f DSGVO (berechtigtes Interesse an einem
      technisch fehlerfreien und sicheren Betrieb). Die Logs werden nach [Zeitraum
      einsetzen, z. B. 7–14 Tage] gelöscht, sofern keine sicherheitsrelevanten
      Vorfälle eine längere Aufbewahrung erfordern.</p>
    <p><b>Hosting:</b> Die Website wird bei [Hosting-Anbieter, Firmierung, Anschrift]
      gehostet. Mit dem Anbieter besteht ein Vertrag zur Auftragsverarbeitung nach
      Art. 28 DSGVO. Server-Standort: [Land].</p>

    <h2>3. Kontaktformular und E-Mail-Kontakt</h2>
    <p>Wenn Sie uns über das Kontaktformular oder per E-Mail kontaktieren, verarbeiten
      wir die von Ihnen gemachten Angaben (Name, Unternehmen, E-Mail-Adresse, Telefon,
      Nachricht) zur Bearbeitung Ihrer Anfrage.</p>
    <p>Rechtsgrundlage ist Art. 6 Abs. 1 lit. b DSGVO (vorvertragliche Maßnahmen) bzw.
      Art. 6 Abs. 1 lit. f DSGVO (berechtigtes Interesse an der Beantwortung von
      Anfragen). Die Formulardaten werden per E-Mail an uns übermittelt und auf dem
      Server nicht dauerhaft in einer Datenbank gespeichert. Wir löschen die Daten,
      sobald sie für den Zweck nicht mehr erforderlich sind und keine gesetzlichen
      Aufbewahrungspflichten entgegenstehen.</p>

    <h2>4. Schriftarten</h2>
    <p>Diese Website bindet Schriftarten („Bricolage Grotesque“, „Inter“) über Google
      Fonts ein. Dabei wird eine Verbindung zu Servern von Google (Google Ireland
      Limited / Google LLC, USA) hergestellt und Ihre IP-Adresse übertragen.
      Rechtsgrundlage: Art. 6 Abs. 1 lit. f DSGVO.</p>
    <p>[Datenschutzfreundlicher: die Schriftdateien lokal auf dem eigenen Server
      ausliefern und die externe Einbindung entfernen. In diesem Fall diesen Abschnitt
      entsprechend anpassen bzw. streichen.]</p>

    <h2>5. Keine Analyse-Tools / kein Tracking</h2>
    <p>Diese Website setzt derzeit keine Analyse-, Tracking- oder Marketing-Cookies ein.
      Es besteht kein Cookie-Banner, da keine einwilligungspflichtigen Technologien
      genutzt werden. [Anpassen, sobald z. B. Webanalyse eingesetzt wird.]</p>

    <h2>6. Ihre Rechte</h2>
    <p>Sie haben im Rahmen der gesetzlichen Vorgaben das Recht auf Auskunft (Art. 15),
      Berichtigung (Art. 16), Löschung (Art. 17), Einschränkung der Verarbeitung
      (Art. 18), Datenübertragbarkeit (Art. 20) sowie ein Widerspruchsrecht gegen
      Verarbeitungen auf Grundlage von Art. 6 Abs. 1 lit. f DSGVO (Art. 21).</p>
    <p>Zudem haben Sie ein Beschwerderecht bei einer Datenschutz-Aufsichtsbehörde.</p>

    <h2>7. Änderungen</h2>
    <p>Wir passen diese Datenschutzerklärung an, sobald Änderungen der Website oder der
      Rechtslage dies erfordern. Es gilt die jeweils hier veröffentlichte Fassung.</p>
  </div>
</section>

<?php require __DIR__ . '/partials/footer.php'; ?>
