@component('mail::message')
 
Cześć {{ array_get($profile, "fname") }},

## Jutro uruchomimy możliwość wysyłania zaproszeń VIP do swoich Partnerów i Kontrahentów

Dzisiaj chcielibyśmy zainteresować Ciebie świadczeniami premium, **na które oferujemy (tylko do końca dnia) 10% rabatu**

**Dystrybucja smyczy z logotypem Twojej firmy** wśród zwiedzających 

**Partner Strefy VIP** (branding, możliwość ustawienia mini stoiska)


@component('mail::button', ['url' => $accountUrlPremium])
Zobacz/zamów usługi PREMIUM
@endcomponent



Pozdrawiam,

{{$footer}}

@endcomponent



