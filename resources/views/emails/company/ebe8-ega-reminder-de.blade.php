@component('mail::message')

# Hallo {{ array_get($profile, "fname") }},

Wir wollten nur kurz erinnern: Die Anmeldefrist für die 7. Ausgabe der E-Commerce Germany Awards läuft, und wir würden es echt schade finden, wenn du das verpassen würdest!

Was sind die E-Commerce Germany Awards (E-GA)?

Die E-GA sind ein einmal im Jahr stattfindender Wettbewerb, bei dem die Leistungen von B2B-Dienstleistern im E-Commerce ausgezeichnet werden.
**Warum mitmachen?**
- Mehr Sichtbarkeit: Zeig deine Marke einem breiten Publikum.
- Bekanntheit steigern: Stärke deine Präsenz bei Kunden und Konkurrenten.
- Motiviere dein Team: Booste die Stimmung, indem du die Erfolge deiner Firma hervorhebst.
- Top-Talente anziehen: Werde zum Anziehungspunkt für Branchenprofis.

Und das Beste: Als Aussteller bei der Expo, ist die Anmeldung komplett **KOSTENLOS!** Klick einfach auf den Button unten:

@component('mail::button', ['url' => "https://ecommercegermanyawards.com?utm_source=email&utm_medium=email&utm_campaign=exhibitors_system_ega"])
Melde dein Unternehmen an
@endcomponent

Lass dir diese Gelegenheit nicht entgehen. Feier mit uns die Exzellenz im deutschen E-Commerce!

**Die Deadline für die Anmeldung ist der 15. Dezember 2023.**

Beste Grüße,

{{$footer}}

@endcomponent