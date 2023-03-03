@component('mail::message')

Hallo  {{ array_get($profile, "fname") }},

vielen Dank, dass du bei der E-commerce Berlin Expo 2023 teilgenommen hast. Wir hoffen, du hattest eine tolle Zeit und hast wertvolle Kontakte geknüpft!

(1)

Um das nächste Event noch besser zu machen, bitten wir dich, einen kurzen Fragebogen auszufüllen. Es dauert nur wenige Minuten und ist uns sehr wichtig. Bis jetzt haben wir etwa 30% der Antworten erhalten. Wenn du es noch nicht getan hast, füll es bitte aus!

@component('mail::button', ['url' => 'https://docs.google.com/forms/d/e/1FAIpQLSdISRIDDYbQXOhAWS13mwS8phTEnat90Cm3xyD19ItK_C4Kwg/viewform?usp=sf_link'])
FRAGEBOGEN
@endcomponent

(2)

Wir haben auch ein Paket mit Fotos von deinem Unternehmen auf der Messe zusammengestellt. Du kannst sie gerne über den Link unten herunterladen.

@component('mail::button', ['url' => $photosUrl ])
Fotos von der EBE2023 (.zip)
@endcomponent

(3)

Wir sind bereit, dir mitteilen zu können, dass die nächste E-commerce Berlin Expo am 22. Februar 2024 stattfinden wird. Die Ausstellungsflächen werden ab dem 14. März 2023 verkauft. Wir halten dich auf dem Laufenden, sobald wir weitere Informationen haben!
Vielen Dank für deine Unterstützung und Teilnahme. Wir hoffen, dich 2024 wiederzusehen!

Liebe Grüße,

{{$footer}}

@endcomponent