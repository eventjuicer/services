@component('mail::message')
 
Cześć {{ array_get($profile, "fname") }},


W Panelu wystawcy dostępne są świadczenia premium - zapraszamy do rezerwacji.


**Partner Strefy VIP** (branding, możliwość ustawienia mini stoiska)

Zezwolenie na dystrybucję **materiałów poza stoiskiem**

Partner drukowanego **planu targowego**

**Dystrybucja** materiałów reklamowych **w punkcie rejestracji**

Pakiet promocyjny w social mediach

SPRZEDANE ~~Dystrybucja smyczy z logotypem Twojej firmy wśród zwiedzających~~ 

SPRZEDANE ~~Partner Punktu Kawowego~~

SPRZEDANE ~~Logotyp na identyfikatorach Zwiedzających~~



@component('mail::button', ['url' => $accountUrlPremium])
Zobacz/zamów usługi PREMIUM
@endcomponent



Pozdrawiam,

{{$footer}}

@endcomponent



