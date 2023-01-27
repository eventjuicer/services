@component('mail::message')

# Hallo {{ array_get($profile, "fname") }},

Ein unabdingbarer Teil der E-commerce Berlin Expo ist die **Networkingparty mit der Verleihung der E-commerce Germany Awards** am Tag vor der Expo - am 22.02.2023 im Spindler & Klatt in Berlin.

Ihr könnt die jeweiligen Personen in eurem Ausstellerprofil registrieren. Unter “Networking-Party Teilnehmer” könnt ihr das **bis zum 06.02.2023 machen**. 

@component('mail::button', ['url' => $accountUrlParty])
FÜGE PARTYGÄSTE HINZU
@endcomponent

- Standard & Hot - **0 Gratistickets enthalten im Ausstellerpaket**
- Super HOT & Ultra - 1 Gratisticket enthalten im Ausstellerpaket
- Grand & Grand premium - 2 Gratistickets enthalten im Ausstellerpaket

Falls ihr weitere Tickets haben möchtet, dann könnt ihr das unter "Zusätzliche Tickets und Sponsoring" tun. Jedes Ticket kostet 79€ p.P. Die Anzahl zusätzlicher Tickets ist ausschließlich durch die Kapazität des Veranstaltungsortes begrenzt.

Bei Rückfragen stehen wir dir gerne zur Verfügung. 

{{$footer}}

@endcomponent