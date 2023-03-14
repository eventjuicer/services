@component('mail::message')
 
Hallo {{ array_get($profile, "fname") }},

@component('mail::panel')

## Heute - 14. März, 11:00 Uhr

Exklusiver Verkauf für die TOP30-Unternehmen aus dem Ausstellerwettbewerb.

**Du gehörst zu den 30 berechtigten Unternehmen!** Buche heute über [LINK](https://ecommerceberlin.com/top30earlybird_t63sUa9)

Du kannst den Ausstellungsplatz über den oben bereitgestellten geheimen Link **bis zum Ende des Tages** buchen.

Am nächsten Tag wird der Verkauf für alle geöffnet sein und wir können nicht mehr die besten Plätze zum niedrigsten Preis garantieren.

@endcomponent

## Wie funktioniert der Buchungsprozess?

Jeder nachfolgende Pool wird automatisch aktiviert, nachdem das Limit des vorherigen Pools erreicht wurde. Es kann passieren, dass am ersten Tag neue, teurere Verkaufspool aktiviert werden, wenn der vorherige Pool bereits ausgebucht ist.

Beste Grüße,

{{$footer}}

@endcomponent