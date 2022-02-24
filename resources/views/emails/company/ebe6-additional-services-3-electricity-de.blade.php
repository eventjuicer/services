

@component('mail::message')

# Hallo {{ array_get($profile, "fname") }},

Ich wollte dich kurz daran erinnern, dass es der letzte Moment ist, zusätzliches Equipment für euren Stand zu buchen - die Deadline ist am **28. Februar!**

Bitte bedenkt bei der Planung eurer Standausstattung auch, ob die dort bereitgestellte Stromleistung für euch ausreichend ist.

**In eurem Standardpaket stellen wir euch nur 500W (9m2 Stand) bzw. 1000W (18m2 Stand) zur Verfügung. Wenn ihr weitere Geräte anschließen möchtet, empfehlen wir, die Ausgangsleistung zu erhöhen.**

Eine Leistung von 1000W reicht aus, um 2-3 Laptops und 1 Bildschirm zu haben. **Die Standardleistung wird nicht ausreichen, falls ihr zusätzliche Geräte wie etwa eine Kaffeemaschine anschließen möchtet oder ähnliches.**

Einen zusätzlichen Anschluss von 1000W oder 3000W könnt ihr über euer Ausstellerprofil bestellen:

@component('mail::button', ['url' => $accountUrl])
Zu meinem Account gelangen
@endcomponent

Bei Fragen stehe ich gerne zur Verfügung!

Beste Grüße,
 
{{$footer}}

@endcomponent
