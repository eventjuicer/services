

@component('mail::message')
 
# Cześć  {{ array_get($profile, "fname") }},

**W panelu Wystawcy możesz już dodać przedstawicieli, którzy będą reprezentowali firmę podczas Targów.**

@component('mail::button', ['url' => $accountUrlReps])
Dodaj / usuń Przedstawicieli 
@endcomponent

Przypominamy, że w ramach wykupionej jednej przestrzeni wystawienniczej otrzymujesz maksymalnie 4 vouchery obiadowe w cenie stoiska i 1 kartę parkingową. 

**Jeśli Przedstawicieli jest więcej niź 4 - dokup proszę vouchery obiadowe** (Panel wystawcy -> Udział w Targach -> Dodatkowe vouchery)

Pozdrawiam,

{{$footer}}

@endcomponent



