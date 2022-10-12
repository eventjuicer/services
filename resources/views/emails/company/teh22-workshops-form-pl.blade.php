

@component('mail::message')
 
Cześć {{ array_get($profile, "fname") }},

Po pozytywnym przyjęciu naszej propozycji **uruchamiamy zapisy dla firm, które chcą prowadzić Warsztat dla zaakceptowanych Uczestników** (w Strefie VIP)


@component('mail::button', ['url' => "https://targiehandlu.pl/workshops"])
Zgłoszenie warsztatu
@endcomponent


**Na ten moment gotowość potwierdziły następujące firmy:**

* Spark
* Global4Net
* Shoper
* IDEA commerce
* Expandeco
* OLX
* AVOCADO Soft
* Ergonode
* Samba.ai
* edrone 


## Kluczowe informacje

Mamy **max 12 slotów** (30 minut + 15minut na Q&A / instalację kolejnego Prowadzącego)

Planujemy 2 przestrzenie warsztatowe (po 6 Warszatów per przestrzeń); 

Uczestnicy - **grupa 20-25 osób,** które mogą się zgłosić i **muszą zostać zaakceptowane** przez Prowadzącego za pośrednictwem Panelu Wystawcy

Prowadzący ma do dyspozycji **laptop i mikrofon**

Uczestnicy będą mieli do dyspozycji **duże wyświetlacze LED i słuchawki**

**Aktywną promocję Warsztatów zaczynamy od 17 października**

Opłata 1000 pln netto

Warsztaty odbędą się obok strefy VIP (HALA 3), do której **każdy uczestnik będzie miał  nielimitowany dostęp**

**Warsztat będzie dostępny dla pierwszych 12 firm, które wypełnią formularz**.


@component('mail::button', ['url' => "https://targiehandlu.pl/workshops"])
Zgłoszenie warsztatu
@endcomponent




Pozdrawiam,

{{$footer}}

@endcomponent



