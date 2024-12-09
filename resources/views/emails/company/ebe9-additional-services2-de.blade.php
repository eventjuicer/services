@component('mail::message')

# Hallo {{ array_get($profile, "fname") }},

Da die Messe immer näher rückt, wollen wir dich an die zusätzlichen Dienstleistungen erinnern, die du für Deine Ausstellungsfläche immer noch bestellen kannst.
Bitte überprüfe noch einmal, ob alles, was du benötigst, in deinem Paket enthalten ist. Falls nicht, kannst du dir gerne unser Angebot an zusätzlichen Dienstleistungen ansehen.
Damit die Bestellungen reibungslos abgewickelt werden können, empfehlen wir nachdrücklich, alle **Bestellungen vor den Weihnachtsfeiertagen aufzugeben**.

Es ist die letzte Chance, die folgenden Standdienste zu buchen:
​
* Vollständiger Standbau - die Frist für die Bestellung der Leistung ist  **der 16. Dezember**,
​* Teppichbelag,
* Broschürenhalter,
* zusätzliche Stromleistung.

Wichtig: Wenn du an einem kostenlosen Möbelset (2 Stühle und 1 Tisch) interessiert bist, wähle diese Option auf der Ausstellerplattform aus.

Um die Preise und Details zu überprüfen und die Bestellung abzuschließen, klicke einfach auf den Button unten:

@component('mail::button', ['url' => $accountUrlArrangement])
Zu meinem Account gelangen
@endcomponent

Bei weiteren Fragen stehe ich jederzeit gerne zur Verfügung.

Beste Grüße,

{{$footer}}

@endcomponent