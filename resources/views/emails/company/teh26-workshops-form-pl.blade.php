

@component('mail::message')
 
Cześć {{ array_get($profile, "fname") }},

Uruchomiliśmy zapisy dla **firm, które chcą prowadzić Warsztat** dla wybranych przez siebie osób z grona zarejestrowanych Uczestników Targów

## Podczas tej edycji, wybierzemy 18 zgłoszeń, które najbardziej obiecują praktyczny, niesprzedażowy, wymiar warsztatu. Nie obowiązuje zatem kolejność zgłoszeń.

**DEADLINE na zgłoszenia piątek (4 października) 16:00.**

@component('mail::button', ['url' => "https://targiehandlu.pl/workshops/register"])
Zgłoszenie propozycji warsztatu
@endcomponent


**Firmy, które prowadziły warsztaty w poprzednich edycjach to, m.in.:**

* Orange
* ExpertSender
* Prestashop
* IdoSell
* cyber_Folks
* User.com
* Alsendo
* PushPushGo

## Kluczowe informacje

Mamy **max 18 slotów** (30 minut + 15minut na Q&A / instalację kolejnego Prowadzącego)

Planujemy max 3 przestrzenie warsztatowe (po 6 Warszatów w strefie); 

Uczestnicy - **grupa 20-25 osób,** które mogą się zgłosić i **muszą zostać zaakceptowane** przez Prowadzącego za pośrednictwem Panelu Wystawcy. 

Prowadzący ma do dyspozycji **laptop i mikrofon**

Uczestnicy będą mieli do dyspozycji **duże wyświetlacze LED i słuchawki**

**Aktywną promocję Warsztatów zaczynamy 1,5 tygodnia przed terminem Targów**

Opłata 2000 pln netto (wystawcy bieżącej edycji), 3000 pln netto (marki spoza grona Wystawców)

Warsztaty odbędą się w ramach strefy VIP (HALA 3), do której **każdy uczestnik będzie miał  nielimitowany dostęp**



@component('mail::button', ['url' => "https://targiehandlu.pl/workshops/register"])
Zgłoszenie warsztatu
@endcomponent



Pozdrawiam,

{{$footer}}

@endcomponent



