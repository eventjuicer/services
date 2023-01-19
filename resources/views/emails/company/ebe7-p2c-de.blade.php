@component('mail::message')

# Hallo {{ array_get($profile, "fname") }},

[Auf deinem öffentlichen Ausstellerprofil]({!! $trackingLink !!}) wurde eine neue Funktion "REQUEST A MEETING" eingeführt.

Besucher können dein Unternehmen zu einem Treffen einladen, um schon vor dem Messetag mit euch Kontakt aufzunehmen.

## Wie funktioniert das?

Wenn du für deine Teilnahme an der EXPO wirbst (zur Erinnerung: du kannst von uns zur Verfügung gestelltes Werbematerial verwenden) und den Link zu deinem öffentlichen Ausstellerprofil an die Besucher schickst, können diese ein Treffen mit euch vereinbaren, indem sie auf "REQUEST A MEETING" klicken.

Alle Einladungen von Besuchern landen in der RSVPs auf der Ausstellerplattform (über ausstehende Einladungen werden wir dich ebenfalls informieren).

Wenn du einen Termin bestätigst, erhältst du sofortigen Zugang zu den Kontaktdaten des Besuchers.

## Wie kann ich mein Ausstellerprofil und meine Terminfunktion promoten?

Nutze den [Teil mit vorgefertigten Materialien für dein Unternehmen auf der Austtellerplatform]({!! $accountUrlPromote !!}) oder werbe mit deinem eigenen URL - {!! $trackingLink !!}

Bitte beachte, dass der Teil mit dem Werbematerial auf der Website öffentlich ist. Kopiere die Adresse [URL zu dieser Seite]({!! $accountUrlPromote !!}) aus der Adresszeile deines Browsers und schicke sie an die Person, die für die Werbemaßnahmen in deiner Firma zuständig ist.

Viele Grüße,

{{$footer}}

@endcomponent