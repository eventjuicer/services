

@component('mail::message')

# Hallo {{ array_get($profile, "fname") }},

Die letzte Expo ist schon eine Weile her, oder? Wir sind hier, um dir dabei zu helfen, das Beste aus eurer Teilnahme an der E-Commerce Berlin Expo zu machen!

Unten findest den Link zu unserem Artikel, wo wir die wichtigsten Tipps für unsere Aussteller zusammengefasst haben. Dies sollte dir helfen, dich auf das Event vorzubereiten!

@component('mail::button', ['url' => '['https://ecommercegermany.com/blog/how-to-prepare-yourself-for-the-expo?utm_source=exhibitors&utm_medium=system-mail&utm_campaign=best_practicies']'])
DIE BESTEN TIPPS
@endcomponent

Falls du mit uns etwas über die Expo besprechen möchtest, können wir uns gerne bei einem Call treffen und deine Fragen klären. Bitte buche dazu ein Termin in dem Kalender deines Ansprechpartners:

DOMINIK: [CALENDLY](https://calendly.com/dominik-ebe)
GEROME: [CALENDLY](https://calendly.com/gerome-ebe)
MARTA: [CALENDLY](https://calendly.com/marta-ebe)

Wir würden dir gerne helfen und können es kaum erwarten, euch bald in Berlin begrüßen zu dürfen!

Schöne Grüße,
 
{{$footer}}

@endcomponent
