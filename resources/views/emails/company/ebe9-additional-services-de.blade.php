@component('mail::message')

# Hallo {{ array_get($profile, "fname") }},

**Die E-Commerce Berlin Expo 2025 rückt immer näher!** Deshalb möchten wir dich darauf hinweisen, dass du auf der Ausstellerplattform immer noch zusätzliche Dienste wahrnehmen kannst, wie z.B.:**

- Vollständiger Standbau,
- Teppichbelag,
- Broschürenhalter,
- zusätzliche Stromleistung.

Falls du ein Standardmöbelset für deinen Stand wünschst, bestehend aus 2 Hockern und einem Tisch, stelle bitte sicher, dass du diese Option so schnell wie möglich [hier](https://account.ecommerceberlin.com/#/arrangement/2832/show) ankreuzt. Andernfalls wird die Lieferung nicht erfolgen.

@component('mail::button', ['url' => $accountUrlArrangement])
Zu meinem Account gelangen
@endcomponent

Die Bestellfrist für den kompletten Standaufbau ist der **16. Dezember 2024.** Bei Interesse stelle sicher, dass du deine Bestellung frühzeitig machst, da die Preise später steigen und die Verfügbarkeit begrenzt ist. (Bitte beachte dabei, dass die Ausstellungsfläche keine Rückwand und keinen Teppich beinhaltet. Es ist eine offene Fläche, die du selbst gestalten kannst)

Planst du, deinen eigenen Stand zu bauen? Falls du das noch nicht getan hast, informiere bitte umgehend deinen Designierten Account Manager und stelle sicher, dass du das unterschriebene Dokument mit den technischen Richtlinien für den Standbau zurückgeschickt hast. Das Unterzeichnen und Zurücksenden des Dokuments ist erforderlich, um die Genehmigung für den Standbau zu erhalten.

Bei Fragen stehe ich gerne zur Verfügung!

{{$footer}}

@endcomponent