

@component('mail::message')
 
# Hallo {{ array_get($profile, "fname")  }},

Nochmals ein großes Dankeschön für eure Teilnahme an der EBE 2022!

Falls ihr die Feedback-Umfrage noch nicht ausgefüllt habt, würden wir uns sehr freuen, wenn ihr euch die Zeit nehmen könnt um uns eure Meinung mitzuteilen:

@component('mail::button', ['url' => "https://forms.gle/We8hiEmopUF4LdTHA"])
UMFRAGE
@endcomponent

Wir haben die Fotos vom Event durchgesehen und sortiert. Hier findet ihr ein für euer Unternehmen vorbereitetes Fotopaket:

@component('mail::button', ['url' => $photosUrl ])
FOTOS
@endcomponent

Die kommende Ausgabe der Expo ist für den 23. Februar 2023 geplant.

Danke und liebe Grüße,

{{$footer}}

@endcomponent
