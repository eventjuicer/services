@component('mail::message')
 
# Hallo {{ array_get($profile, "fname") }},

**Vielen Dank, dass ihr Teil der E-Commerce Berlin Expo 2022 wart! **

Wir hoffen, dass ihr die Messe genauso genossen habt wie wir und dass sie eure Erwartungen erfüllt (oder sogar übertroffen!) hat.

Apropos – **euer Feedback ist uns sehr wichtig,** denn nur so können wir uns verbessern und euch in Zukunft ein noch hochwertigeres Erlebnis bieten. 

Wir würden uns sehr freuen, wenn du dich (oder deine Kollegen, die an der Expo teilgenommen haben) ein paar Minuten Zeit nehmen könntest, um die unten stehende Umfrage auszufüllen und uns euer Feedback mitzuteilen.

@component('mail::button', ['url' => 'https://forms.gle/4W21JdyDUpKX1FkT7'])
UMFRAGE
@endcomponent

**Nächste Woche starten wir mit dem Early-Bird-Verkauf für die Ausgabe 2023**, die exklusiv für die diesjährigen Aussteller erhältlich ist. Wir werden uns in Kürze mit euch in Verbindung setzen, um die besten verfügbaren Stände und die niedrigsten Preise zu besprechen.

Vielen Dank für deine Zeit und wir hoffen, euch nächstes Jahr in Berlin zu sehen!

Beste Grüße,

{{$footer}}

@endcomponent