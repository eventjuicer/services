

@component('mail::message')
 
# Cześć {{ array_get($profile, "fname")  }},

W panelu wystawcy uruchomiona została opcja wysyłki zaproszeń VIP.

## Zaproś swoich VIP do ekskluzywnej Strefy VIP na Targach. 

Strefa VIP to miejsce do komfortowych, kuluarowych rozmów Prelegentów, Wystawców, wybranych Zwiedzających oraz **gości których zaprosisz przez panel Wystawcy.**.

**Każdy Przedstawiciel Wystawcy ma automatyczny dostęp do Strefy VIP - nie wykorzystuj zaproszeń VIP do tego celu.**

@component('mail::button', ['url' => $accountUrlVips])
Zaproszenia VIP dla Partnerów i Klientów
@endcomponent

Zaproszenia VIP mogą być dystrybuowane na 2 sposoby:

* automatyczna wysyłka z panelu (po prostu wpisz adres email odbiorcy)

* pobranie indywidualnego linka i wysyłka za pośrednictwem swoich kanałów


(Jeśli potrzebujesz więcej zaproszeń - odezwij się do nas.)


Regards, 

{{$footer}}

@endcomponent

