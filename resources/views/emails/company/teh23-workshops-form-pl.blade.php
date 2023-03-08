

@component('mail::message')
 
Cześć {{ array_get($profile, "fname") }},

Po udanej premierze Warsztatów podczas poprzedniej edycji Targów eHandlu, ponownie  **uruchamiamy zapisy dla firm, które chcą prowadzić Warsztat dla wybranych przez siebie Uczestników** 


@component('mail::button', ['url' => "https://targiehandlu.pl/workshops/register"])
Zgłoszenie warsztatu
@endcomponent


**Firmy, które prowadziły warsztaty jesienią 2022 to, m.in.:**

* Shoper
* GRUPA OLX
* user.com	
* Expandeco
* DTW Logistics Group
* Idea commerce

## Kluczowe informacje

Mamy **max 18 slotów** (30 minut + 15minut na Q&A / instalację kolejnego Prowadzącego)

Planujemy max 3 przestrzenie warsztatowe (po 6 Warszatów w strefie); 

Uczestnicy - **grupa 20-25 osób,** które mogą się zgłosić i **muszą zostać zaakceptowane** przez Prowadzącego za pośrednictwem Panelu Wystawcy

Prowadzący ma do dyspozycji **laptop i mikrofon**

Uczestnicy będą mieli do dyspozycji **duże wyświetlacze LED i słuchawki**

**Aktywną promocję Warsztatów zaczynamy 1,5 tygodnia przed terminem Targów**

Opłata 1500 pln netto (wystawcy bieżącej edycji), 2500 pln netto (marki spoza grona Wystawców)

Warsztaty odbędą się w ramach strefy VIP (HALA 3), do której **każdy uczestnik będzie miał  nielimitowany dostęp**

## Warsztat będzie dostępny dla pierwszych 18 firm, które wypełnią formularz

@component('mail::button', ['url' => "https://targiehandlu.pl/workshops/register"])
Zgłoszenie warsztatu
@endcomponent



Pozdrawiam,

{{$footer}}

@endcomponent



