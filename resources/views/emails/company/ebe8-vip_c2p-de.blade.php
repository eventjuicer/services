@component('mail::message')

# Hello {{ array_get($profile, "fname")  }},

Wir haben vor kurzem personalisierte Werbematerialien und eine "Terminanfrage"-Funktion in eurem öffentlichen Profil veröffentlicht, und das ist noch nicht alles!

Wir haben **zwei Funktionen** im Matchmaking Tool auf der Ausstellerplattform aktiviert. Nun beginnt die Teamarbeit - sorgt dafür, dass ihr so viele Treffen wie möglich habt und somit auch möglichst viele Leads von der EXPO bekommt.

## #1

**Nun könnt ihr die Liste der registrierten Expo-Gäste durchsehen und Einladungen verschicken, um vor der EXPO mit ihnen in Kontakt zu treten** - dies ist ein weiteres Tool für unsere Aussteller, mit dem sie den ROI durch ihre Expo-Teilnahme maximieren können.

Durch die Veröffentlichung des Firmenprofils und das Sammeln von Punkten könnt ihr **bis zu 200 Treffen** mit registrierten Besuchern eurer Wahl vereinbaren und eine unbegrenzte Anzahl von Anfragen von Besuchern erhalten. **In beiden Fällen erhält man vollständige Kontaktinformationen**.

@component('mail::button', ['url' => $accountUrlVisitors])
Zur Liste der registrierten Expo-Teilnehmer gehen
@endcomponent

## #2

Wir haben euch gebrauchsfertige VIP-Tickets auf der Plattform zur Verfügung gestellt, die ihr nun kostenlos an eure wichtigsten Kunden oder Partner verschenken könnt.

Die VIP-Zone ist ein Ort für komfortable Gespräche hinter den Kulissen zwischen Speakern, Ausstellern, ausgewählten VIP Besuchern.

**Jeder Firmenvertreter hat Zugang zur VIP-Zone - verwende keine VIP-Einladungen hierfür**.

@component('mail::button', ['url' => $accountUrlVips])
VIP-Einladungen für Partner und Kunden
@endcomponent

VIP-Einladungen können auf 2 Wegen verteilt werden:

* automatischer Versand über die Plattform (einfach die E-Mail-Adresse des Empfängers eingeben)

* Kopieren eines individuellen Links auf der Ausstellerplattform und Versand über eigene Kanäle.

**Hierfür schlagen wir vor, einen kurzen Termin mit dem zuständigen Account Manager zu vereinbaren, um alle aufkommenden Fragen zu besprechen um zu erfahren, wie man das Beste aus den von uns gelieferten Möglichkeiten herausziehen kann**.

Interessiert? Klickt auf einen der Calendly-Links um einen Call zu vereinbaren. 

Beste Grüße,

{{$footer}}

@endcomponent