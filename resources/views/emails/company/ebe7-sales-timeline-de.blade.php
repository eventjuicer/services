@component('mail::message')
 
# Hallo {{ array_get($profile, "fname")  }},
 
Anbei findest du den Zeitplan des Salesprozesses für die kommende Ausgabe der E-Commerce Berlin Expo, die am 23. Februar 2023 stattfindet.
 
## Mittwoch - 18. Mai, 11:00 Uhr
 
Exklusiver Vorverkauf für die TOP30 Unternehmen aus dem Aussteller-Wettbewerb. 
 
Falls euer Unternehmen an der Buchung von 3 oder mehr Ausstellungsflächen interessiert ist, teilt uns dies bitte mit.

@component('mail::panel')

## Donnerstag - 19. Mai, 11:00 Uhr
 
**Offener Verkauf für alle** - der Hallenplan mit den Preisen ist auf unserer Webseite verfügbar : [ecommerceberlin.com/exhibit](https://ecommerceberlin.com/exhibit)
 
@endcomponent

## Wie sieht der Buchungsprozess aus?
 
Aufgrund des das Platzlimit übersteigenden Interesses setzen wir ein anderes Verkaufsmodell um.
 
Jeder nachfolgende Pool wird automatisch aktiviert, nachdem das Limit des vorherigen Pools erreicht wurde. Es kann vorkommen, dass am ersten Tag ein neuerer, teurerer Salespool aktiviert wird, wenn der vorherige Pool bereits ausgebucht ist.
 
Beste Grüße,
 
{{$footer}}
 
@endcomponent
