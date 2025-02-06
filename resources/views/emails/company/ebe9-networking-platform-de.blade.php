@component('mail::message')
 
# Hallo {{ array_get($profile, "fname")  }},

Wir freuen uns bekannt zu geben, dass unsere neue [Networking Platform](https://ecomm.berlin/) jetzt live ist und genutzt werden kann! Es ist der perfekte Zeitpunkt, um gemeinsam zu arbeiten, eure Meetings zu maximieren und so viele Leads wie möglich von der EXPO zu generieren.

@component('mail::panel')
Jeder Unternehmensvertreter, der als **sichtbar** auf der Aussteller-Plattform markiert ist, hat einen **individuellen Login-Link** zur Networking-Plattform und eine kurze Anleitung zur Verwendung erhalten. Der Link wurde an die E-Mail-Adresse gesendet, die bei der Hinzufügung des Vertreters zum Unternehmenskonto angegeben wurde.

Die Login-Links für alle Vertreter sind ebenfalls im Bereich Firmenvertreter-Liste verfügbar.
@endcomponent

Ihr könnt eure Unternehmensvertreter und deren Sichtbarkeit direkt über die Aussteller-Plattform verwalten.

@component('mail::button', ['url' => $accountUrlReps])
Zur Firmenvertreter-Liste
@endcomponent

Unsere Account Managers stehen euch gerne zur Verfügung, um eure Fragen zu beantworten und euch zu helfen, das Beste aus unseren Tools herauszuholen.

Zögert nicht, euch bei uns zu melden! Wir freuen uns darauf, mit euch in Kontakt zu treten!

PS: Später in dieser Woche wird die Möglichkeit freigeschaltet, VIP-Einladungen zu versenden, zusammen mit unseren Werbematerialien – bleibt dran!

Mit freundlichen Grüßen 

{{$footer}}

@endcomponent
