

@component('mail::message')

# Hello {{ array_get($profile, "fname") }},

Wir befinden uns im Endspurt vor der E-Commerce Berlin Expo. Es ist höchste Zeit, euch die neueste Herausforderung vorzustellen, die exklusiv für unsere Aussteller verfügbar ist.

## Was ist die Idee dahinter?

Wir glauben, dass es bei einer erfolgreichen Veranstaltung nicht nur darum geht, neue Kunden kennenzulernen, sondern auch die Beziehungen zu bestehenden Kunden zu stärken. Und was wäre eine bessere Gelegenheit dafür, als sie auf der Expo zu treffen?

## Wie funktioniert das?

Bei diesem Wettbewerb könnt ihr Punkte sammeln, indem ihr einen Link teilt, der eure Teilnahme an der Expo bewirbt und eure Kunden zur Teilnahme an der Veranstaltung einlädt. Jeder Klick eines Nutzers entspricht einem Punkt – ganz einfach! Der Trick ist, dass ihr euren personalisierten Link teilen müsst, um die Punkte zu erhalten.
 
Euren individuellen Link findet ihr in eurem Ausstellerprofil im Bereich **Werbematerial**.

@component('mail::button', ['url' => $accountUrl])
Zu meinem Account gelangen
@endcomponent

Ihr könnt den Link in E-Mail-Signaturen, Anzeigen (FB-Anzeigen, Adwords, sozialen Medien) oder mit Hilfe des direkten Kommunikationsweges bei euren Kunden verwenden. Jeder Link kann auch in die Zwischenablage kopiert und per Messenger, E-Mail oder in euren Newslettern versendet werden.

## Wie teile ich den Link?

Der in den sozialen Medien gepostete Link kann unterschiedliche visuelle Ergebnisse liefern:

* die von uns entworfene Standardgrafik (erscheint automatisch, keine Handlung eurerseits erforderlich),

* euer individuelles Design (nur aktiv, wenn ihr die vollständige URL zu eurer Grafik im Bereich **Firma** eures Ausstellerprofils angebt).

Ihr könnt die Grafik in Tools wie Facebook Debugger oder LinkedIn Post Inspector in der Vorschau anzeigen lassen. Wenn die aktualisierte Grafik nicht sofort sichtbar ist, leert bitte euren Cache und versucht es erneut.

Darüber hinaus haben wir im Abschnitt **Newsletter Vorlagen** zwei versandfertige Newsletter (Englisch und Deutsch) vorbereitet, die eure Kunden und Partner über eure Teilnahme an der Veranstaltung informieren sollen. Ihr könnt die HTML kopieren oder eine ZIP-Datei herunterladen, die einfach von Newsletter2go oder Mailchimp-ähnlicher Software importiert werden kann.

## Was kann man gewinnen?

In eurem Ausstellerprofil könnt ihr die vollständige Liste der verfügbaren Preise im Abschnitt **Preise** einsehen, wie zum Beispiel:

* Speaking Slot auf einer unserer Bühnen während der Expo,

* Video-Interview,

* Logo-Highlight auf der EBE-Website,

* Und vieles mehr!
 
Jeder der Preise setzt die Erfüllung der beschriebenen Bedingungen für seine Gewährung voraus:

* minimale Punktzahl (= Seitenaufrufe eures öffentlichen Ausstellerprofils über den individualisierten Link),

* Position im Ausstellerranking.
 
**Die Preise schließen einander nicht aus** – ihr könnet gleichzeitig mehrere Preise gewinnen.

## Wo sind wir im Ranking? 

Im Bereich **Preise** eures Ausstellerprofils findet ihr den Referenzlink zum Ranking, wo ihr eure aktuelle Position im Wettbewerb einsehen könnt.

Das Ranking wird auf der Grundlage von Daten erstellt, die von unserem Analysetool abgerufen werden. Bitte beachtet, dass es eine Weile dauert, bis die Punkte dort sichtbar sind - wenn ihr die Ergebnisse früh morgens überprüft, seht ihr möglicherweise die Ergebnisse vom Vortag.

## Fragen?

Meldet euch gerne bei mir und ich helfe gerne weiter! Vereinbart am besten einen Call mit mir, damit wir alle Fragen durchgehen können.

**Das Gewinnspiel endet am 22. April 2022, 23:59 Uhr MEZ.**

Viel Erfolg!

{{$footer}}

@endcomponent

