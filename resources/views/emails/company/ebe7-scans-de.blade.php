@component('mail::message')

# Hallo {{ array_get($profile, "fname") }},

Wir haben etwas Besonderes für dich vorbereitet! Auf der Expo kannst du mühelos die **Kontaktdaten der Besucher sammeln,** die du dort triffst. Es ist sehr einfach; Einen Schritt-für-Schritt-Anleitung haben wir für dich in deinem Aussteller-Panel vorbereitet.

@component('mail::button', ['url' => $accountUrlBadgescanner])
Scannen Anweisung
@endcomponent

Alle von dir gesammelten Kontaktinformationen werden sofort im Abschnitt *Gescannte Leads* deines Aussteller-Panels gespeichert. Um alle Kontaktdaten und Kommentare zu sehen, nutze bitte die Exportfunktion.

Wenn du Fragen hast, zögere bitte nicht, uns zu kontaktieren!

Herzliche Grüße,

{{$footer}}

@endcomponent
