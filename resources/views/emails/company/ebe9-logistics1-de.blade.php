@component('mail::message')

# Hallo {{ array_get($profile, "fname") }},

Nur noch ein Monat bis zu der E-Commerce Berlin Expo, daher haben wir einige organisatorische Informationen für euch zusammengestellt:

1. Unten findet ihr den Link zum Ausstellerhandbuch, in dem alle wichtigen Informationen enthalten sind:

@component('mail::button', ['url' => "https://drive.google.com/drive/folders/1WZZzVMxJ-u_YeHNnTsYqtZ8B93XlXezF"])
LINK
@endcomponent  

2. Wenn ihr mit dem Auto zur STATION (Luckenwalder Str. 4–6, 10963 Berlin) anreist, bitte beachtet:

- Das Reinfahren auf das Gelände mit dem Auto ist nur am Vortag, d.h. dem 18.02.2025 möglich. Öffnungszeiten: **10:00-22:00 Uhr**;
- Standnummern beginnend mit den Buchstaben **A, B und M** - Einfahrt von der Luckenwalder Straße (Halle 3);
- Standnummern beginnend mit den Buchstaben **C, D, E & F** Einfahrt von der Trebbiner Straße (Halle 7);
- Entladen ist für 1 Stunde pro Fahrzeug möglich;
- Die STATION-Berlin wird bei der Einfahrt eine Kaution iHv. **100€** pro Fahrzeug verlangen 

3. Während der Expo ist das Parken auf dem Gelände des Veranstaltungsorts strengstens **untersagt**. Wir empfehlen das Parken an den Straßen in der Nähe des Geländes oder das Parkhaus in der Nähe: ampido Parkplatz,  Schöneberger Ufer 3

4. Erst eine Stunde nach der Expo (nach 18:00 Uhr am 20.02.2025) kann wieder auf das Gelände mit dem Auto eingefahren werden. Eine Kaution von **100€ (bar)** ist ebenfalls erforderlich.

5. Anreise mit der U-Bahn: Die nächstgelegene Station ist U Gleisdreieck. 							

Bitte lasst uns wissen, falls ihr Fragen habt. Wir freuen uns, euch bald auf der Expo zu sehen!

Beste Grüße,

{{$footer}}

@endcomponent