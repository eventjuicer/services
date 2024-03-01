@component('mail::message')

Hallo  {{ array_get($profile, "fname") }},

vielen Dank, dass du bei der E-commerce Berlin Expo 2024 teilgenommen hast. Wir hoffen, du hattest eine tolle Zeit und hast wertvolle Kontakte geknüpft!

(1)

Um das nächste Event noch besser zu machen, bitten wir dich, einen kurzen Fragebogen auszufüllen. Es dauert nur wenige Minuten und ist uns sehr wichtig. Bis jetzt haben wir etwa 30% der Antworten erhalten. Wenn du es noch nicht getan hast, füll es bitte aus!

@component('mail::button', ['url' => 'https://forms.gle/gGXawHbYEWfiLntw7'])
FRAGEBOGEN
@endcomponent

(2)

Wir haben auch ein Paket mit Fotos von deinem Unternehmen auf der Messe zusammengestellt. Du kannst sie gerne über den Link unten herunterladen.

@component('mail::button', ['url' => $photosUrl ])
Fotos von der EBE2024 (.zip)
@endcomponent

(3)

Wir sind bereit, dir mitteilen zu können, dass die nächste E-commerce Berlin Expo am 19-20. Februar 2025 stattfinden wird. Die Ausstellungsflächen werden ab dem 5. März 2024 verkauft. Wir halten dich auf dem Laufenden, sobald wir weitere Informationen haben!
Vielen Dank für deine Unterstützung und Teilnahme. Wir hoffen, dich 2025 wiederzusehen!

Liebe Grüße,

{{$footer}}

@endcomponent