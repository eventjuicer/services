@component('mail::message')
 
# Cześć {{ array_get($profile, "fname")  }},

W panelu wystawcy uruchomiona została opcja wysyłki zaproszeń VIP.

## Zaproś swoich Partnerów, kluczowych Klientów do ekskluzywnej Strefy VIP na Targach. 

Strefa VIP to miejsce do komfortowych, kuluarowych rozmów Prelegentów, Wystawców, wybranych Zwiedzających oraz **gości, których zaprosisz przez Panel Wystawcy.**.

@component('mail::panel')

**Każdy Przedstawiciel Wystawcy (zarejestrowany w Panelu) ma automatyczny dostęp do Strefy VIP - nie wykorzystuj zaproszeń VIP do tego celu.**

@endcomponent

Zaproszenia VIP mogą być dystrybuowane na 2 sposoby:

* automatyczna wysyłka z panelu (po prostu wpisz adres email odbiorcy)

* pobranie indywidualnego linka i wysyłka za pośrednictwem swoich kanałów


@component('mail::button', ['url' => $accountUrlVips])
Zaproszenia VIP dla Partnerów i Klientów
@endcomponent


Jeśli potrzebujesz więcej zaproszeń, skorzystaj z materiałów promocyjnych, promuj swój publiczny profil Wystawcy. Liczba dostępnych zaproszeń VIP ulegnie automatycznemu powiększeniu.

**Każde + 50pkt w rankingu Wystawców to kolejne 5 zaproszeń VIP**

Regards, 

{{$footer}}

@endcomponent

