@component('mail::message')

# Hallo {{ array_get($profile, "fname") }},

Um in Zukunft unsere Kommunikation noch zu verbessern und sicherzustellen, dass unsere Nachrichten die zuständigen Personen auf Eurer Seite erreichen, möchten wir Dich in dieser E-Mail bitten, den Kontaktteil auf der Ausstellerplattform auszufüllen und die Mitarbeiter Deines Unternehmens anzugeben.

Bitte nach Möglichkeit hinzufügen:

**PR-Manager**

**Event-Manager**

**Sales-Manager**

So werdet ihr in Zukunft über Themen wie z.B. Vorverkauf, Zusammenarbeit, Veranstaltungsorganisation und Kooperationsangebote auf dem Laufenden gehalten.

@component('mail::button', ['url' => $accountUrlPeople])
KLICKE HIER, UM KONTAKTE HINZUZUFÜGEN
@endcomponent

Bei Fragen lass es mich bitte wissen.

Beste Grüße,
 
{{$footer}}

@endcomponent
