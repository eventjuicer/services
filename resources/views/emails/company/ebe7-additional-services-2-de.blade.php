@component('mail::message')

# Hallo {{ array_get($profile, "fname") }},

Wir möchten dich nochmals an die Möglichkeit erinnern, bei uns zusätzliche Standdienste zu bestellen.

Bitte stell noch einmal sicher, dass ihr im Paket alles habt, was ihr braucht, sonst könnt ihr euch noch unser Angebot an Extraservices anschauen.

**Es ist empfehlenswert, Bestellungen noch vor den Weihnachtsfeiertagen aufzugeben, damit die Abwicklung reibungslos abläuft.**

Es ist die letzte Chance, die folgenden Standdienste zu buchen:

* Vollständiger Standbau
* Teppichbelag
* LED-Bildschirm 50 Zoll
* Broschürenhalter
* Zusätzliche Stromleistung

Um weitere Details zu den einzelnen Angeboten zu sehen, drücke einfach den Button unten:

@component('mail::button', ['url' => $accountUrlArrangement])
Zu meinem Account gelangen
@endcomponent

Bei weiteren Fragen stehen ich jederzeit gerne zur Verfügung.

Beste Grüße,
 
{{$footer}}

@endcomponent
