@component('mail::message')

# Hallo {{ array_get($profile, "fname") }},

**Die E-Commerce Berlin Expo 2026 rückt immer näher!** Deshalb möchten wir euch darauf hinweisen, dass ihr auf der Ausstellerplattform immer noch zusätzliche Dienste wahrnehmen könnt, wie z.B.:

- vollständiger Standbau mit vollbedruckter Rückwand, Counter, Teppich und Prospekthalter,
- Teppichbelag,
- TV-Display (ausschließlich als Upgrade für Bestellungen des kompletten Standbau-Services verfügbar)


@component('mail::button', ['url' => $accountUrlArrangement])
Zu meinem Account gelangen
@endcomponent


Plant ihr, das kostenlose Basismöbel-Set zu nutzen? Dann füge es unbedingt kostenlos in deinem Account [hinzu](https://account.ecommerceberlin.com/#/arrangement/3221/show). **Es wird sonst nicht bereitgestellt**.


Wichtig: Die Bestellfrist für den kompletten Standbau-Service ist der **15. Dezember 2025**. Bitte beachte, dass die Preise nach dem **30. November** steigen und die Verfügbarkeit begrenzt sein kann. Eure Ausstellungsfläche enthält standardmäßig keine Rückwand oder Teppich. Ihr könnt beides entweder selbst organisieren oder direkt über die Plattform bestellen.

**Baut ihr den Stand selbst?** Falls noch nicht geschehen, informiere bitte deinen Customer Success Manager und reiche deine Standpläne zusammen mit dem unterschriebenen Dokument **Technische Richtlinien** spätestens bis zum **15. Dezember 2025** ein. Dies ist unbedingt erforderlich, um die Baugenehmigung zu erhalten.

**[Lade die Technischen Richtlinien herunter](https://asset.cloudinary.com/ecommerceberlin/44a29ffb585356954628ed6411980c65)** und sende sie unterschrieben zusammen mit den erforderlichen Dokumenten zurück.

Bei Fragen stehe ich gerne zur Verfügung!

{{$footer}}

@endcomponent