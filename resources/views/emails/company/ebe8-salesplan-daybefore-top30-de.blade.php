@component('mail::message')
 
# Hey {{ array_get($profile, "fname") }} ,

Wir wollten dich nur daran erinnern, dass **morgen**, am 14. März 2023 um 11:00 Uhr, die **exklusive Verkaufsrunde für die TOP30** Unternehmen des aktuellen Aussteller-Wettbewerbs beginnt.

Bitte beachte, dass die Reservierung von Ausstellungsflächen nur bis zum Ende des Tages am 14. März 2023 möglich ist.

Die Verkaufsrunde für die ANDEREN Aussteller der Ausgabe 2023 wird am 15. März 2023 veröffentlicht.

Um alle verfügbaren Ausstellungsflächen zu sehen, bitte auf den folgenden Link klicken und **auf der Seite nach unten scrollen, um die verfügbaren Stände in den Hallen 3, 4, 7 zu sehen**

@component('mail::button', ['url' => 'https://ecommerceberlin.com/top30earlybird_t63sUa9'])
Buchungsplan & Preise
@endcomponent

Wenn du irgendwelche Fragen hast, melde dich gerne bei uns!

Cheers,

{{$footer}}
 
@endcomponent
