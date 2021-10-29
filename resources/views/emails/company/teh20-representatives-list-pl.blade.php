

@component('mail::message')
 
# Cześć  {{ array_get($profile, "fname") }},

**W panelu Wystawcy jest dostępna opcja dodawania Przedstawicieli Wystawcy, którzy mają mieć wydrukowane identyfikatory i będą reprezentowali firmę na stoisku.**

** Prośba o dodanie przedstawicieli do końca tygodnia** gdyż najpóźniej we wtorek (12 października) chcielibyśmy oddać pliki do druku.

@component('mail::button', ['url' => $accountUrl])
Dodaj Przedstawicieli 
@endcomponent

Przypominamy, że w ramach wykupionej przestrzeni wystawienniczej otrzymujesz maksymalnie 4 vouchery obiadowe w cenie stoiska i 1 kartę parkingową. **Jeśli Przedstawicieli jest więcej niź 4 - dokup proszę vouchery obiadowe** (Panel Wystawcy -> Usługi dodatkowe.)

Pozdrawiam,

Karolina Michalak

@endcomponent



