

@component('mail::message')

# Hallo {{ array_get($profile, "fname") }},

Nur noch eine Woche bis zu der E-Commerce Berlin Expo, daher haben wir einige organisatorische Informationen für euch zusammengestellt:

1. Unten findet ihr den Link zum Ausstellerhandbuch, in dem alle wichtigen Informationen enthalten sind:

@component('mail::button', ['url' => 'https://res.cloudinary.com/ecommerceberlin/image/upload/v1650619127/Logistics/Exhibitor%E2%80%99s%20Manual/EBE_2022_-_Exhibitor_s_Manual_DE.pdf'])
Ausstelleranleitung
@endcomponent

2. Wenn ihr mit dem Auto zum STATION (Luckenwalder Str. 4–6, 10963 Berlin) anreist, bitte beachtet:

* **Das Reinfahren auf das Gelände mit dem Auto ist nur am Vortag, d.h. dem 04.05.2022 möglich.** Öffnungszeiten: 13:00-22:00 Uhr
* Standnummern beginnend mit den Buchstaben A und L - Einfahrt von der Luckenwalder Straße (Halle 3)
* Standnummern beginnend mit den Buchstaben B, C, D & E Einfahrt von der Trebbiner Straße (Halle 7)
* Entladen ist für **1 Stunde** pro Fahrzeug möglich
* Die STATION-Berlin wird bei der Einfahrt eine Kaution iHv. **50€** pro Fahrzeug verlangen.

3. **Während der Expo ist das Parken auf dem Gelände des Veranstaltungsorts strengstens untersagt.** Wir empfehlen das Parken an den Straßen in der Nähe des Geländes oder das Parkhaus in der Nähe: Parkhaus Gleisdreieck: Schöneberger Ufer 3.

4. Erst eine Stunde nach der Expo (nach 18:00 Uhr am 05.05.2022) kann wieder auf das Gelände mit dem Auto eingefahren werden.

Bitte lasst uns wissen, falls ihr Fragen habt. Wir freuen uns, euch bald auf der Expo zu sehen!

Beste Grüße,

{{$footer}}

@endcomponent



