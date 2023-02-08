@component('mail::message')
 
Hallo,

Du hast auf deiner Ausstellerplattform **Terminanfragen von den Teilnehmern** der E-Commerce Berlin Expo erhalten. **Diese warten auf deine Antwort.**

**Hinweis: Durch die Annahme der Terminanfrage werden die Kontaktdaten der Teilnehmer angezeigt.**

@component('mail::button', ['url' => $url("meetups") ])
Siehe Termineinladungen hier
@endcomponent

@component('mail::panel')

Um mehr Terminanfragen zu erhalten und eure Präsenz zu erhöhen, teile euer [öffentliches Ausstellerprofil]({!!$profileUrl!!}) mit anderen. [Hier findest du gebrauchsfertige Werbematerialien]({!!$accountUrlPromotePublic!!}), die dir dabei nützlich sein können.

@endcomponent

Viele Grüße,

{{$footer}}

@endcomponent




