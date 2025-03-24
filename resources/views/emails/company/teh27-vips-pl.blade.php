@component('mail::message')
 
# Cześć {{ array_get($profile, "fname")  }},

W aplikacji eventowej (ECWE.PL), do której mają dostęp m.in. przedstawiciele wystawcy uruchomiona została opcja wysyłki zaproszeń VIP.

## Zaproś swoich Partnerów, kluczowych Klientów do ekskluzywnej Strefy VIP na Targach. 

Strefa VIP to miejsce do komfortowych, kuluarowych rozmów Prelegentów, Wystawców, wybranych Zwiedzających oraz **gości, których zaprosisz przez Panel Wystawcy.**.

@component('mail::panel')

**Każdy Przedstawiciel Wystawcy (zarejestrowany w Panelu) ma automatyczny dostęp do Strefy VIP - nie wykorzystuj zaproszeń VIP do tego celu.**

@endcomponent

Zaproszenia VIP są dystrybuowane przez platformę - po wpisaniu adresu email odbiorcy następuje wysyłka (zaproszenie jest ważne 3 dni)

@component('mail::button', ['url' => $accountUrlVips])
Zaproszenia VIP dla Partnerów i Klientów
@endcomponent


Regards, 

{{$footer}}

@endcomponent

