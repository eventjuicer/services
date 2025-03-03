@component('mail::message')
 
# Hi {{ array_get($profile, "fname") }},

Wir möchten dich an die zeitlich begrenzte Early-Bird-Verkaufsrunde für Aussteller der vorherigen Ausgabe der E-Commerce Berlin Expo erinnern, die morgen, am 4. März 2025 um 11:00 Uhr, beginnen wird.

Um alle verfügbaren Ausstellungsflächen anzuzeigen, klicke bitte auf den untenstehenden Link, der dich zur Buchungskarte führt.

@component('mail::button', ['url' => "https://ecommerceberlin.com/exhibit"])
Hier die Karte ansehen
@endcomponent

Einige Plätze sind bereits von Unternehmen gebucht worden, die uns am Verkaufsstand während der Messe getroffen haben.

Mit freundlichen Grüßen,

{{$footer}}

@endcomponent