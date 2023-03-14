@component('mail::message')
 
# Hi {{ array_get($profile, "fname") }},

Wir möchten dich an die begrenzte Early-Bird-Verkaufsrunde für Aussteller der vorherigen Ausgabe der E-commerce Berlin Expo erinnern, die **morgen** am 15. März 2023 um 11:00 Uhr beginnt.

Um alle verfügbaren Ausstellungsbereiche einzusehen, klicke bitte auf den unten stehenden Link, der dich zur Buchungskarte weiterleitet.

@component('mail::button', ['url' => "https://ecommerceberlin.com/exhibit"])
Hier die Karte ansehen
@endcomponent

Bitte beachte, dass einige Flächen bereits von "Top30"-Gewinnern des kürzlich stattgefundenen Ausstellerwettbewerbs gebucht wurden und als "R." markiert sind.

Beste Grüße,

{{$footer}}

@endcomponent