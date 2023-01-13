@component('mail::message')

Hallo {{ array_get($profile, "fname") }},

Wir befinden uns auf der Zielgeraden vor der E-Commerce Berlin Expo. Alle Hände an Deck, denn wir haben einen **exklusiven Wettbewerb für die Aussteller** aufgesetzt. Zu gewinnen gibt es attraktive Preise: **ein Video-Interview, einen Frühbucherzugang für EBE2024-Stände** und vieles mehr!

Für den Sieg muss man die meisten Punkte sammeln! Wie kann man sie sammeln? Durch das Teilen der Links, die mit den von uns vorbereiteten Werbematerialien verknüpft sind. Diese Materialien sollen für Eure Teilnahme an der Expo werben und Eure Kunden zur Teilnahme an dem Event einladen.

**Die Links und die vorgefertigten Promo-Materialien kannst du auf der Ausstellerplattform unter Promo-Materialien finden. Klicke sie an, um den entsprechenden Link zu finden.**

@component('mail::button', ['url' => $accountUrlPromote])
Zu meinem Account gelangen
@endcomponent

**Alle Werbematerialien sind mit dem öffentlichen Ausstellerprofil verknüpft, **

wo die Besucher mehr über deine Firma erfahren und sehen, was ihr zu bieten habt

die Lage des Messestandes auf der EXPO finden

ein Treffen mit Euch am Stand vereinbaren können (NEUE)

**Für jeden engagierten Besuch eines Nutzers auf eurem öffentlichen Profil, der über euren speziellen Link läuft, erhaltet ihr einen Punkt. Je mehr Punkte, desto größer die Chance, Preise zu gewinnen!**

Willst du deine Position im Wettbewerb wissen oder mehr über die verschiedenen Preise erfahren? Gehe dann zur Seite Promotion -> Ranking.

Das Beste daran ist, dass der Gewinn eines Preises andere Preise nicht ausschließt - man kann mehrere Preise gleichzeitig gewinnen!

**Der Ausstellerwettbewerb endet am 20. Februar 2023, 23:59 Uhr MEZ.**

Bei Fragen stehe ich gerne zur Verfügung. Viel Glück!

Beste Grüße,

{{$footer}}

@endcomponent