

@component('mail::message')

# Hallo {{ array_get($profile, "fname") }},

**The E-commerce Berlin Expo 2023 rückt immer näher!** In eurem Ausstellerprofil habst du bereits die Optionen, **zusätzliche Standdienste zu buchen, wie zum Beispiel:**

• Vollständiger Standbau mit vollem Branding der Rückwand, Theke, Broschürenhalter

• Teppichbelag

• LED-Bildschirm 50 Zoll

• Broschürenhalter

• Zusätzliche Stromleistung

Die Dienste sind bis zum 13. Januar 2023 online verfügbar.

Für mehr Details zu den einzelnen Angeboten drücke den Button unten.

@component('mail::button', ['url' => $accountUrlArrangement])
Zu meinem Account gelangen
@endcomponent

Bei Fragen stehen ich gerne zur Verfügung!

{{$footer}}

@endcomponent



