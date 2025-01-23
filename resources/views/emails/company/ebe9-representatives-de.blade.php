@component('mail::message')

# Hallo {{ array_get($profile, "fname") }},

Ich hoffe, es geht dir gut!

Es ist jetzt an der Zeit, eure Firmenvertreter für die E-commerce Berlin Expo zu registrieren. Bitte fügt dafür die Informationen über eure Teammitglieder auf der Ausstellerplattform im Abschnitt „Firmenvertreter“ hinzu.

**WICHTIG**: Alle registrierten Firmenvertreter können die Networking-Funktion nutzen. Wenn ihr jedoch nicht teilnehmen möchtet, könnt ihr die Option „Mich ausblenden“ auswählen. Dadurch werden eure persönlichen Daten von der Teilnehmerliste entfernt, und weder ihr noch andere können über das Matchmaking-Tool miteinander in Kontakt treten.

@component('mail::button', ['url' => $accountUrlReps])
Zu meinem Account gelangen
@endcomponent

**Bitte beachte**: Ihr könnt bis zu 4 Delegierte registrieren, es sei denn, es wurde etwas anderes vereinbart oder ihr habt zusätzliche Tickets auf der Ausstellerplattform bestellt.

Wenn ihr plant, mehr als 4 Vertreter gleichzeitig an eurem Stand zu haben, bestellt bitte für jeden zusätzlichen Vertreter ein weiteres Ticket über die Ausstellerplattform. Jedes zusätzliche Ticket beinhaltet 2 Cateringgutscheine, einen für jeden Tag der Veranstaltung. Wenn ihr einen Vertreter registriert, aber kein zusätzliches Ticket auf der Plattform kauft, erhält er ein offizielles Badge, jedoch keine Cateringgutscheine.

Die Frist für die Anmeldung der Delegierten ist der **5. Februar**. Anmeldungen nach diesem Datum garantieren nicht, dass ihre Badges gedruckt werden. Daher bitten wir Sie, im Falle von Änderungen nach der Frist, die notwendigen Informationen per E-Mail zu übermitteln.

Denke bitte daran, dass wenn du selbst auch als Vertreter an der EXPO teilnehmen möchtest, dann musst du dich auch in der Rubrik Firmenvertreter anmelden. 

Bei Fragen stehe ich gerne zur Verfügung.

Beste Grüße,
 
{{$footer}}

@endcomponent