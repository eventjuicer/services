

@component('mail::message')
 
Cześć {{ array_get($profile, "fname") }},

Przypominamy, że **DEADLINE na zgłoszenie chęci prowadzenia warsztatu mija w piątek (8 marca) o 16:00.**

## Podczas tej edycji, wybierzemy 18 zgłoszeń, które charakteryzują się praktycznym, niesprzedażowym, wymiarem warsztatu. Nie obowiązuje kolejność zgłoszeń.

@component('mail::button', ['url' => "https://targiehandlu.pl/workshops/register"])
Zgłoszenie propozycji warsztatu
@endcomponent

**Firmy, które prowadziły warsztaty w poprzedniej edycji to, m.in.:**

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



