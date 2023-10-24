@component('mail::message')
 
# Cześć {{ array_get($profile, "fname")  }},

Przypominamy, że w panelu wystawcy uruchomiona została opcja wysyłki zaproszeń VIP.

@component('mail::panel')

Zaproś swoich Partnerów, kluczowych Klientów do ekskluzywnej Strefy VIP na Targach. 

Strefa VIP to miejsce do komfortowych, kuluarowych rozmów Prelegentów, 
Wystawców, Gości VIP oraz **Twoich Partnerów i Kontrahentów, których zaprosisz przez Panel Wystawcy.**.

@endcomponent

@component('mail::button', ['url' => $accountUrlVips])
Zaproszenia VIP dla Partnerów i Klientów
@endcomponent


Zaproszenia VIP mogą być dystrybuowane na 2 sposoby:

* automatyczna wysyłka z panelu (po prostu wpisz adres email odbiorcy)

* pobranie indywidualnego linka i wysyłka za pośrednictwem swoich kanałów


## Jeśli potrzebujesz więcej zaproszeń, skorzystaj z materiałów promocyjnych, promuj swój publiczny profil Wystawcy. Liczba dostępnych zaproszeń VIP ulegnie automatycznemu powiększeniu.




**UWAGA: Każdy Przedstawiciel Wystawcy (zarejestrowany w Panelu) ma automatyczny dostęp do Strefy VIP - nie wykorzystuj zaproszeń VIP do tego celu.**




Regards, 

{{$footer}}

@endcomponent

