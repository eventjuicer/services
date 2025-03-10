

@component('mail::message')
 
Cześć {{ array_get($profile, "fname") }},

Uruchomiliśmy zapisy dla **firm, które chcą prowadzić Warsztat** dla wybranych przez siebie osób z grona aplikujących Uczestników Targów.

## Podczas tej edycji, wybierzemy 21 zgłoszeń, które obiecują najbardziej praktyczny i niesprzedażowy wymiar warsztatu.

**DEADLINE na zgłoszenia to piątek (14 marca) 16:00.**

@component('mail::button', ['url' => "https://targiehandlu.pl/workshops/register"])
Zgłoś propozycję Warsztatu
@endcomponent


**Firmy, które prowadziły warsztaty w poprzednich edycjach to, m.in.:**

* Orange
* PayPal
* Prestashop
* IdoSell
* cyber_Folks
* User.com
* BLIK
* PushPushGo

## Kluczowe informacje

Mamy **max 21 slotów** (30 minut + 15minut na Q&A / podczas których przygotowuje się kolejny Prowadzący)

Planujemy max 3 przestrzenie warsztatowe (po 7 Warszatów w strefie); 

Uczestnicy - **grupa 20-25 osób,** które mogą się zgłosić i **muszą zostać zaakceptowane** przez Prowadzącego za pośrednictwem Panelu Wystawcy. 

Podczas Warsztatu Prowadzący będzie miał do dyspozycji **laptop oraz mikrofon**

Uczestnicy będą mieli do dyspozycji **duże wyświetlacze LED i słuchawki**

**Aktywną promocję Warsztatów oraz zapisy dla Uczestników rozpoczniemy 1,5 tygodnia przed terminem Targów**

Opłata 2500 pln netto (wystawcy bieżącej edycji), 3500 pln netto (marki spoza grona Wystawców)

Warsztaty odbędą się w ramach strefy VIP (HALA 3), do której **każdy uczestnik Warsztatów będzie miał nielimitowany dostęp**



@component('mail::button', ['url' => "https://targiehandlu.pl/workshops/register"])
Zgłoś swój temat Warsztatu
@endcomponent



Pozdrawiam,

{{$footer}}

@endcomponent



