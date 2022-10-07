

@component('mail::message')
 
Cześć {{ array_get($profile, "fname") }},

## Na wniosek kilku Wystawców **planujemy uruchomić strefę warsztatów** dla firm oferujących oprogramowanie.

Zasady: 

* Prowadzący ma do dyspozycji 30 minut, ekran LED 

* Uczestnicy - grupa 20-25 osób, które mogą się zgłosić i muszą zostać zaakceptowani (lista dostępnych warszatatów - wraz z opcją zgłoszenia się na nie - będą dostępne na stronie Targów; będziemy je aktywnie promować)

* Opłata 1000 pln netto

Warsztaty odbędą się Hali 3 (obok strefy VIP, do której każdy uczestnik będzie miał także nielimitowany dostęp),
nagłośnienie za pośrednictwem słuchawek.

## Czy Twoja firma jest zainteresowana?

Pozdrawiam

{{$footer}}

@endcomponent



