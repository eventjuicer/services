@component('mail::message')

# Hallo {{ array_get($profile, "fname") }},

Da die Messe immer näher rückt, wollen wir dich an die zusätzlichen Dienstleistungen erinnern, die du für Deine Ausstellungsfläche immer noch bestellen kannst.

Wenn du noch kein komplettes Standarrangement bestellt hast, beachte bitte, dass dein aktuelles Paket nur die Raummiete und die Grundausstattung wie Stühle und einen Tisch umfasst. Werfe mal einen Blick auf dein Paket und erkunde unser Angebot an zusätzlichen Dienstleistungen, um sicherzustellen, dass du alles hast, was du brauchst.
 
Damit die Bestellungen reibungslos abgewickelt werden können, empfehlen wir nachdrücklich, alle **Bestellungen vor den Weihnachtsfeiertagen aufzugeben**.

Es ist die letzte Chance, die folgenden Standdienste zu buchen:

* Vollständiger Standbau - die Frist für die Bestellung der Leistung ist  **der 15. Dezember**.
* Teppichbelag
* LED-Bildschirm 50 Zoll
* Broschürenhalter
* Zusätzliche Stromleistung

Wichtig: Wenn du an einem **kostenlosen Möbelset (2 Stühle und 1 Tisch) interessiert bist, klicke auf diese Option (kostenlos!) über die Ausstellerplattform**.

Um die Preise, Details zu überprüfen und die Bestellung abzuschließen, klicke einfach auf den Button unten:

@component('mail::button', ['url' => $accountUrl])
Zu meinem Account gelangen
@endcomponent

Bei weiteren Fragen stehe ich jederzeit gerne zur Verfügung.

Beste Grüße,

{{$footer}}

@endcomponent