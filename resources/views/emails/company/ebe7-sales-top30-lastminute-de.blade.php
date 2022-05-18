

@component('mail::message')
 
# Hallo {{ array_get($profile, "fname")  }},
  
@component('mail::panel')

## Heute / 18. Mai, 11:00 Uhr
 
**Exklusiver Vorverkauf für die TOP30 Unternehmen** aus dem Aussteller-Wettbewerb.

**Ihr seid eines der 30 berechtigten Unternehmen! Bucht die Ausstellungsfläche heute über [ecommerceberlin.com/top30earlybird_t6d63sa9](https://ecommerceberlin.com/top30earlybird_t6d63sa9)**
 
Über diesen Link könnt ihr die Ausstellungsflächen bis **zum Ende des Tages buchen.** 

Am Folgetag wird der Verkauf für alle geöffnet und die besten Plätze zu den niedrigsten Preisen können nicht mehr garantiert werden.
 
@endcomponent

## Wie sieht der Buchungsprozess aus?
 
Aufgrund des das Platzlimit übersteigenden Interesses setzen wir ein anderes Verkaufsmodell um.
 
Jeder nachfolgende Pool wird automatisch aktiviert, nachdem das Limit des vorherigen Pools erreicht wurde. Es kann vorkommen, dass am ersten Tag ein neuerer, teurerer Salespool aktiviert wird, wenn der vorherige Pool bereits ausgebucht ist.
 
Beste Grüße,
 
{{$footer}}
 
@endcomponent
