@component('mail::message')
 
# Hello {{ array_get($profile, "fname") }},

Wir wollten dich nur daran erinnern, dass der Verkauf für die E-commerce Berlin Expo 2024 bald starten wird. 

Da du einer unserer TOP30 Gewinner bist, ist die BUCHUNGSKARTE unter einer geheimen URL verfügbar (Bitte nicht teilen).

@component('mail::button', ['url' => 'https://ecommerceberlin.com/top30earlybird_t63sUa9'])
PREISE PRÜFEN
@endcomponent

**Wenn du mehr als 3 Flächen buchen möchtest,** antworte auf diese E-Mail mit deiner gewünschten Standnummer aus der Karte bis Montag, den 13. März um EOD. (Einige Stände sind bereits reserviert.)

**Wenn du nicht an unserem Großhandelsangebot interessiert bist**, beginnt deine Buchung am Dienstag, den **14. März um 11 Uhr**. (Du hast exklusiven Zugang zu unseren niedrigsten Preisen für die 2024 Verkaufsrunde.)

Lass uns wissen, falls du Fragen hast.

Liebe Grüße

{{$footer}}
 
@endcomponent