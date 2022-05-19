@component('mail::message')
 
# Hallo {{ array_get($profile, "fname")  }},
 
## Heute (Donnerstag - 19. Mai), 11:00 Uhr
 
**Offener Verkauf für alle** - der Hallenplan mit den Preisen ist auf unserer Webseite verfügbar : [ecommerceberlin.com/exhibit](https://ecommerceberlin.com/exhibit)
 
Einige Ausstellungsflächen wurden bereits von Unternehmen aus den TOP30 des Ausstellerwettbewerbs reserviert.


## Wie sieht der Buchungsprozess aus?
 
Aufgrund des das Platzlimit übersteigenden Interesses setzen wir ein anderes Verkaufsmodell um.
 
Jeder nachfolgende Pool wird automatisch aktiviert, nachdem das Limit des vorherigen Pools erreicht wurde. Es kann vorkommen, dass am ersten Tag ein neuerer, teurerer Salespool aktiviert wird, wenn der vorherige Pool bereits ausgebucht ist.
 
Beste Grüße,
 
{{$footer}}
 
@endcomponent
