

@component('mail::message')

# Hallo {{ array_get($profile, "fname") }},

**The E-commerce Berlin Expo 2022 rückt immer näher! In eurem Ausstellerprofil habst du bereits die Optionen, zusätzliche Standdienste zu buchen, wie zum Beispiel:**

• Vollständiger Standbau mit vollem Branding der Rückwand, Theke, Broschürenhalter
​
• Teppichbelag

• LED-Bildschirm 50 Zoll

• Broschürenhalter

• Zusätzliche Stromleistung

​Die Dienste sind bis zum 30. November 2021 online verfügbar. 
​
Für mehr Details zu den einzelnen Angeboten drücke den Button unten.

@component('mail::button', ['url' => $accountUrl])
Zu meinem Account gelangen
@endcomponent

Bei Fragen stehen ich gerne zur Verfügung!
​
Marta Masternak - Account Manager

E-commerce Berlin Expo

@endcomponent



