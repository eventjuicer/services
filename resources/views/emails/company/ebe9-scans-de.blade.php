@component('mail::message')

# Hallo {{ array_get($profile, "fname") }}, 

Wir haben etwas Besonderes für dich vorbereitet! Auf der Expo kannst du ganz einfach die Kontaktdaten der Teilnehmer sammeln, die du auf der Veranstaltung triffst. Es ist unglaublich einfach - wir haben ein intuitives System für dich erstellt, das in nur wenigen einfachen Schritten funktioniert:

@component('mail::panel')

## 1. Klicke auf den Anmeldelink zur ecomm.berlin-Plattform:

@component('mail::button', ['url' => $accountUrlReps])
Zugriff auf die Login-Links deines Teams
@endcomponent

## 2. Scanne einen Teilnehmer:

Sobald du dich einloggst und das Badge eines Teilnehmers scannst, werden dessen Kontaktdaten automatisch im Bereich Contacts“ auf der ecomm.berlin-Plattform gespeichert.

## 3. Sende eine Nachricht:

Nach dem Scannen kannst du dem Teilnehmer sofort eine Nachricht senden, um direkt mit dem Knüpfen von Verbindungen zu beginnen.

## 4. Exportiere deine Kontakte nach der Veranstaltung:

Sobald die Veranstaltung beendet ist (am 20. Februar 2025), kannst du eine CSV-Datei mit allen von deinem Unternehmen gescannten Kontakten herunterladen.

@endcomponent

Wenn du Fragen hast, zögere bitte nicht, uns zu kontaktieren!

Herzliche Grüße,

{{$footer}}

@endcomponent