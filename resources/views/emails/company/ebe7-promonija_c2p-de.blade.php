@component('mail::message')

# Hallo {{ array_get($profile, "fname") }},

Vor nicht allzu langer Zeit haben wir maßgeschneiderte Promomaterialien für euch zur Verfügung gestellt und die Möglichkeit für die Besucher, euch nach einem Meeting zu fragen. Das war jedoch noch nicht alles. 

Hiermit freuen wir uns, **ein weiteres Tool für unsere Aussteller vorstellen zu können, mit dem man die Zahl der Leads auf der Expo erhöhen kann. Um dem Ganzen den richtigen Schwung zu geben, könnt ihr jetzt die Liste der registrierten Expo-Teilnehmer durchgehen und erfahren, wer kommen wird!**

Das Beste kommt noch: Wenn ihr eure Präsenz auf der Messe über die von uns gelieferten Links bewirbt, bekommt ihr die Chance, **bis zu 200 Treffen mit registrierten Besuchern** eurer Wahl zu vereinbaren, wie auch die Möglichkeit, ** unzählige Einladungen seitens der Besucher zu bekommen**. In beiden Fällen werden euch die vollständigen Kontaktdaten der jeweiligen Person zur Verfügung gestellt. 

**Hierfür schlagen wir vor, einen kurzen Termin mit dem zuständigen Account Manager zu vereinbaren, um alle aufkommenden Fragen zu besprechen um zu erfahren, wie man das Beste aus den von uns gelieferten Möglichkeiten herausziehen kann**.

Interessiert? Klickt auf einen der Calendly-Links um einen Call zu vereinbaren. 

@component('mail::button', ['url' => $accountUrlVisitors])
Liste der registrierten Expo-Teilnehmer 
@endcomponent


@component('mail::panel')

Ihre personalisierten Werbematerialien.

**Bitte senden Sie den folgenden Link an Ihr PR-Team.**

{!! $accountUrlPromotePublic !!}

@endcomponent


Viel Glück!

{{$footer}}


@endcomponent