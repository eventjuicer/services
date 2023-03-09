@component('mail::message')
 
# Hello {{ array_get($profile, "fname") }},

Wir wollten dich nur daran erinnern, dass der Verkauf für die E-commerce Berlin Expo 2024 bald starten wird. 

Da du einer unserer Aussteller warst, hast du exklusiven Zugang zu unseren niedrigsten Preisen für die 2024 Verkaufsrunde.

@component('mail::button', ['url' => 'https://ecommerceberlin.com/exhibit'])
PREISE PRÜFEN
@endcomponent

**Wenn du mehr als 3 Flächen buchen möchtest**, antworte auf diese E-Mail mit deiner gewünschten Standnummer aus der Karte bis Montag, den 13. März um EOD. (Einige Stände sind bereits reserviert.)

**Wenn du nicht an unserem Großhandelsangebot interessiert bist**, beginnt deine Buchung am Mittwoch, den **15. März um 11 Uhr.**

Lass uns wissen, falls du Fragen hast.

Liebe Grüße

{{$footer}}
 
@endcomponent