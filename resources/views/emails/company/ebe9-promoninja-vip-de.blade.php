@component('mail::message')

Hallo {{ array_get($profile, "fname") }},
Wir haben kürzlich personalisierte Werbematerialien veröffentlicht und spannende neue Funktionen auf eurer Ausstellerplattform aktiviert, um euch zu helfen, das Beste aus eurer Expo-Erfahrung herauszuholen!

##1

Zunächst haben wir euch einsatzbereite VIP-Tickets auf der Plattform zur Verfügung gestellt, die ihr jetzt kostenlos an eure wichtigsten Kunden oder Partner weitergeben könnt.

Die VIP-Zone ist der Ort für entspannte, hinter den Kulissen stattfindende Gespräche zwischen Rednern, Ausstellern und ausgewählten VIP-Besuchern.

Jeder Firmenvertreter hat Zugang zur VIP-Zone – bitte verwendet die VIP-Einladungen nicht für diesen Zweck.

@component('mail::button', ['url' => $accountUrlVips]) VIP-Einladungen für Partner und Kunden @endcomponent

VIP-Einladungen können auf 2 Arten verteilt werden:

* automatische Versendung über die Plattform (gebt einfach die E-Mail-Adresse des Empfängers ein)
* Kopieren eines individuellen Links von der Ausstellerplattform und Versenden über eure eigenen Kanäle.

##2

Außerdem haben wir euch personalisierte Werbematerialien zur Verfügung gestellt, die eure Sichtbarkeit und Reichweite erhöhen können. Diese Materialien sind auf Ihr Profil und das Event zugeschnitten und wurden entwickelt, um euch zu helfen, potenzielle Kunden und Partner zu erreichen.

Nutzt sie gerne für eure Marketingaktivitäten und teilt sie mit eurem Publikum. Je mehr ihr bewerbt, desto größer ist die Chance, mit den richtigen Personen in Kontakt zu treten!

@component('mail::button', ['url' => $accountUrlPromote])
Werbematerialien-Seite für euer Unternehmen
@endcomponent

**Die URL eurer Werbematerialien-Seite kann an das PR-Team gesendet werden. Kopiert einfach die URL aus der Adressleiste des Browsers – nachdem ihr euch über den obenstehenden Link in Ihr Panel eingeloggt habt – und sendet diese an eure Kollegen.

Bei Fragen könnt ihr euch jederzeit gerne an uns wenden.

Beste Grüße,
{{$footer}}

@endcomponent
