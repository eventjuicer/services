@component('mail::message')

# Hallo {{ array_get($profile, "fname") }},

Die *Networking Party und die E-Commerce Germany Awards* sind untrennbarer Bestandteil der E-Commerce Berlin Expo. Die Veranstaltung findet am *21. Februar* im Spindler & Klatt Club statt.

Wenn du bereits Tickets gekauft hast, kannst du jetzt deine Vertreter für die Networking Party auf der Ausstellerplattform registrieren. Bitte füge sie bis spätestens **6. Februar** im Bereich "Teilnehmer der Networking Party" hinzu.

Die Anzahl der Gäste, die du anmelden kannst, **muss der Anzahl der von dir bestellten Tickets entsprechen**.

@component('mail::button', ['url' => $accountUrlParty])
FÜGE PARTYGÄSTE HINZU
@endcomponent

Wenn du die Tickets noch nicht gekauft hast oder zusätzliche Tickets kaufen möchtest, kannst du das immer noch in der Rubrik "Zusätzliche Gutscheine und Tickets" tun - jedes zusätzliche Ticket kostet 99 EUR netto. Die Anzahl der Zusatztickets ist ausschließlich durch die Kapazität des Veranstaltungsortes begrenzt.

Bei Rückfragen stehen wir dir gerne zur Verfügung. 

Beste Grüße,

{{$footer}}

@endcomponent