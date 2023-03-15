@component('mail::message')
 
# Hey {{ array_get($profile, "fname")  }},

@component('mail::panel')

## Heute (Mittwoch, 15. März) um 11:00 Uhr CET 

beginnt der exklusive Verkauf nur für Aussteller, einschließlich deines Unternehmens.

Die Buchung ist über [ecommerceberlin.com/exhibit](https://ecommerceberlin.com/exhibit)

Einige Ausstellungsräume wurden bereits von Unternehmen aus dem TOP30 des Ausstellerwettbewerbs reserviert.

@endcomponent

## Wie sieht der Buchungsprozess aus?

Jeder nachfolgende Pool wird automatisch aktiviert, nachdem das Limit des vorherigen Pools erreicht wurde.

Beste Grüße,

{{$footer}}

@endcomponent