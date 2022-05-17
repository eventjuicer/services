

@component('mail::message')
 
# Hallo {{ array_get($profile, "fname")  }},
 
Anbei findest du den Zeitplan des Salesprozesses für die kommende Ausgabe der E-Commerce Berlin Expo, die am 23. Februar 2023 stattfindet.
 
## Mittwoch - 18. Mai, 11:00 Uhr
 
**Exklusiver Vorverkauf für die TOP30 Unternehmen** aus dem Aussteller-Wettbewerb.

**Ihr seid eines der 30 berechtigten Unternehmen!** Bucht die Ausstellungsfläche morgen über [ecommerceberlin.com/top30earlybird_t6d63sa9](https://ecommerceberlin.com/top30earlybird_t6d63sa9)
 
Über diesen Link könnt ihr die Ausstellungsflächen bis **zum Ende des Tages buchen.** 
Am Folgetag wird der Verkauf für alle geöffnet und die besten Plätze zu den niedrigsten Preisen können nicht mehr garantiert werden.
 
Falls euer Unternehmen an der Buchung von 3 oder mehr Ausstellungsflächen interessiert ist, teilt uns dies bitte mit.
 
## Donnerstag - 19. Mai, 11:00 Uhr
 
Offener Verkauf für alle - der Hallenplan mit den Preisen wird ab Donnerstag auf unserer Webseite verfügbar sein: https://ecommerceberlin.com/ 
 
## Wie sieht der Buchungsprozess aus?
 
Aufgrund des das Platzlimit übersteigenden Interesses setzen wir ein anderes Verkaufsmodell um.
 
Jeder nachfolgende Pool wird automatisch aktiviert, nachdem das Limit des vorherigen Pools erreicht wurde. Es kann vorkommen, dass am ersten Tag ein neuerer, teurerer Salespool aktiviert wird, wenn der vorherige Pool bereits ausgebucht ist.
 
Beste Grüße,
 
{{$footer}}
 
@endcomponent
