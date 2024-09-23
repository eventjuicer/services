@component('mail::message')

Hallo {{ array_get($profile, "fname") }},

wir möchten dich daran erinnern, dass der Speaker Contest für die E-commerce Berlin Expo bis zum Freitag, den **27. September** geöffnet ist.

Als Aussteller hast du die Möglichkeit, über deinen Stand hinaus sichtbar zu werden, indem du auf einer unserer fünf Konferenzbühnen präsentierst.

**Warum teilnehmen?**

- **Erhöhe die Sichtbarkeit deines Standes**: Ein Vortrag auf der Bühne kann mehr Besucher zu deinem Stand ziehen.
- **Positioniere dich als Experte**: Als Redner zeigst du deine Fachkompetenz in deinem Bereich.
- **Kostenlose Teilnahme**: Es fallen keine zusätzlichen Kosten für die Teilnahme am Contest an.

**Was ist neu?**

- Wir bieten **viermal mehr** Sprechmöglichkeiten als im letzten Jahr, insgesamt 29 verfügbare Slots.
- Der Auswahlprozess wurde aktualisiert, sodass die Gewinner auch **ohne öffentliche Abstimmung** gewählt werden können.
- Die Kategorien des Wettbewerbs wurden überarbeitet.

Bereit teilzunehmen? Reiche deinen Vorschlag bis Freitag ein – es dauert nur 5 Minuten:

@component('mail::button', ['url' => "https://ecommerceberlin.com/speaking?utm_source=email&utm_medium=email&utm_campaign=system_mailing_exhibitors"])
Deinen Präsentationsvorschlag einreichen
@endcomponent

Wenn du Fragen hast, kannst du dich gerne melden. Wir freuen uns auf deine Bewerbung.

Beste Grüße,

{{ $footer }}

@endcomponent