@component('mail::message')

# Hallo {{ array_get($profile, "fname") }},

Wir haben etwas Besonderes für dich vorbereitet! Auf der Expo kannst du mühelos die **Kontaktdaten der Besucher sammeln,** die du dort triffst. Es ist sehr einfach; Einen Schritt-für-Schritt-Anleitung haben wir für dich in deinem Aussteller-Panel vorbereitet.

@component('mail::button', ['url' => $accountUrlBadgescanner])
Scannen Anweisung
@endcomponent

Alle von dir gesammelten Kontaktinformationen werden sofort im Abschnitt *Gescannte Leads* deiner Ausstellerplattform. Um alle Kontaktdaten und Kommentare zu sehen, nutze bitte die Exportfunktion.

**Wichtig!** Nach dem Ende der EXPO (22.02) bleiben Euch nur 7 Tage, um die gescannten Leads von der Ausstellerplattform in eine Excel-Datei zu exportieren..

Wenn du Fragen hast, zögere bitte nicht, uns zu kontaktieren!

Herzliche Grüße,

{{$footer}}

@endcomponent
