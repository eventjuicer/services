@component('mail::message')

# Hallo {{ array_get($profile, "fname") }},

Ich hoffe, es geht dir gut!

Es ist nun Zeit, Firmenvertreter für die Expo in Berlin anzumelden. Bitte gebe Informationen über eure Teammitglieder (Name, E-Mail-Adresse, Telefonnummer) auf eurem Ausstellerprofil unter "Firmenvertreter" ein. Die von euch hinterlegten Teilnehmer sind diejenigen, die euch bei der Expo vertreten werden.

@component('mail::button', ['url' => $accountUrlReps])
Zu meinem Account gelangen
@endcomponent

**Bitte beachte:** Du kannst bis zu 4 Vertreter anmelden, es sei denn, du hast mit unserem Sales Manager etwas anderes vereinbart, oder du hast zusätzliche Tickets im Voraus bestellt. 

Falls du mehr Teilnehmer anmelden möchtest, musst du zusätzliche Tickets über die Ausstellerplattform erwerben.

Die Frist für die Anmeldung von Delegierten ist der **9. Februar**. Für Anmeldungen nach diesem Datum gibt es keine Garantie, dass die Ausweise ausgedruckt werden. 

Denke bitte daran, dass wenn du selbst auch als Vertreter an der EXPO teilnehmen möchtest, dann musst du dich auch in der Rubrik Firmenvertreter anmelden. 

Bei Fragen stehe ich gerne zur Verfügung.

Beste Grüße,
 
{{$footer}}

@endcomponent