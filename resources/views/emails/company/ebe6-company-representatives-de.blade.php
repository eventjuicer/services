

@component('mail::message')

# Hallo {{ array_get($profile, "fname") }},

Ich hoffe es geht dir gut!

Es ist nun Zeit, Firmenvertreter für die Expo in Berlin anzumelden. Bitte gebe Informationen über eure Teammitglieder (Name, E-Mail-Adresse, Telefonnummer) auf eurem Ausstellerprofil unter "Firmenvertreter" ein. Die von euch hinterlegten Teilnehmer sind diejenigen, die euch bei der Expo vertreten werden.

@component('mail::button', ['url' => $accountUrl])
Zu meinem Account gelangen
@endcomponent

Bitte beachte, dass du so viele Teilnehmer eintragen kannst, wie in deinem Paket vorgesehen sind - 4 Vertreter für ein 9m2 Stand und 6 Vertreter für ein 18m2. 

Wenn du als Ansprechpartner die Expo besuchen möchtest, denke bitte daran, dich auch dabei anzumelden.

Bei Fragen stehe ich gerne zur Verfügung.

Beste Grüße,
 
{{$footer}}

@endcomponent
