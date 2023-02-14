@component('mail::message')

# Hallo {{ array_get($profile, "fname")  }}

Auf der Aussteller-Plattform wurde eine Funktion für VIP-Einladungen eingeführt.

## Lade jetzt deine VIPs zur exklusiven VIP-Zone auf der Messe ein. 

Die VIP-Zone ist ein Ort für komfortable Gespräche hinter den Kulissen zwischen Speakern, Ausstellern, ausgewählten VIP Besuchern.

**Jeder Firmenvertreter hat Zugang zur VIP-Zone - verwende keine VIP-Einladungen hierfür**.

@component('mail::button', ['url' => $accountUrlVips])
VIP-Einladungen für Partner und Kunden
@endcomponent

VIP-Einladungen können auf 2 Wegen verteilt werden:

* automatischer Versand über die Plattform (einfach die E-Mail-Adresse des Empfängers eingeben)

* Kopieren eines individuellen Links auf der Ausstellerplattform und Versand über eigene Kanäle.

Du hast 10 Einladungen als Grundlage. **Indem euer öffentliches Ausstellerprofil bewerbt, könnt ihr bis zu 20 VIP-Einladungen zur Nutzung erhalten.**

Beste Grüße,

{{$footer}}

@endcomponent