

@component('mail::message')

# Hallo {{ array_get($profile, "fname") }},

Hier ist euer Ansprechpartner für die E-commerce Berlin Expo 2022. Meine Kontaktdaten kannst du aus der Signatur entnehmen. Bei Fragen zu eurer Teilnahme an der Messe kannst du dich jederzeit gerne an mich wenden.
 
Auch wenn das Expo-Datum vor kurzem verschoben wurde, bleibt nicht mehr viel Zeit, bis wir uns alle in Berlin treffen!
 
Wir möchten nun sichergehen, dass ihr die Messe genießen werdet. Daher erinnern wir euch an die Möglichkeit, zusätzliche Standdienste bei uns zu bestellen.
 
**Nur bis zum 28. Februar 2022 habt ihr die letzte Chance, die folgenden Dienste zu buchen:**
​
* Vollständiger Standbau (mit vollem Branding der Rückwand, Theke, Broschürenhalter)
​* Teppichbelag
* LED-Bildschirm 50 Zoll
* Broschürenhalter
* Zusätzliche Stromleistung
​
Um weitere Details zu den einzelnen Angeboten zu sehen, drücke einfach den Button unten:

@component('mail::button', ['url' => $accountUrl])
Zu meinem Account gelangen
@endcomponent

Bei weiteren Fragen stehen ich jederzeit gerne zur Verfügung.

Beste Grüße,
 
{{$footer}}

@endcomponent
