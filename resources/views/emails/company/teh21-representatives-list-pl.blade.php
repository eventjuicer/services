

@component('mail::message')
 
# Cześć  {{ array_get($profile, "fname") }},

**W panelu Wystawcy jest dostępna opcja dodawania Przedstawicieli Wystawcy, którzy mają mieć wydrukowane identyfikatory i będą reprezentowali firmę na stoisku.**

@component('mail::button', ['url' => $accountUrlReps])
Dodaj Przedstawicieli 
@endcomponent

Przypominamy, że w ramach wykupionej przestrzeni wystawienniczej otrzymujesz maksymalnie 4 vouchery obiadowe w cenie stoiska i 1 kartę parkingową. **Jeśli Przedstawicieli jest więcej niź 4 - dokup proszę vouchery obiadowe** (Panel Wystawcy -> Udział w Targach ->  Dodatkowe vouchery.)

Pozdrawiam,

{{$footer}}

@endcomponent



