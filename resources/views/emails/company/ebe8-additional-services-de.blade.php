@component('mail::message')

# Hallo {{ array_get($profile, "fname") }},

**Die E-Commerce Berlin Expo 2024 rückt immer näher!** Deshalb möchten wir dich darauf hinweisen, dass du auf der Ausstellerplattform immer noch **zusätzliche Dienste wahrnehmen kannst, wie z.B.:**

- Vollständiger Standbau
- Teppichbelag
- LED-Bildschirm 50 Zoll
- Broschürenhalter
- Zusätzliche Stromleistung

Die Bestellfrist für den kompletten Standaufbau ist der **15. Dezember 2023.** Bei Interesse stelle sicher, dass du deine Bestellung frühzeitig machst, da die Preise später steigen und die Verfügbarkeit begrenzt ist. (Bitte beachte dabei, dass die Ausstellungsfläche keine Rückwand und keinen Teppich beinhaltet. Es ist eine offene Fläche, die du selbst gestalten kannst)

Planst du, deinen Stand selbst aufzubauen? Melde dich bei deinem Account Manager, damit er/sie dir unsere Bauvorschriften zukommen lassen kann.

@component('mail::button', ['url' => $accountUrlArrangement])
Zu meinem Account gelangen
@endcomponent

Bei Fragen stehe ich gerne zur Verfügung!

{{$footer}}

@endcomponent