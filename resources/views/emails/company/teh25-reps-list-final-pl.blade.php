

@component('mail::message')
 
# Cześć  {{ array_get($profile, "fname") }},

Zbliża się DEADLINE na dodanie przedstawicieli Wystawcy, którzy będą reprezentować firmę na Stoisku.

**To jest ostatni moment na dodanie/zmiany. W piątek o 12:00 wysyłamy identyfikatory do druku.**

# Lista zdefiniowanych osób

@forelse($representatives as $rep)

	{{$rep->translate("[[fname]] [[lname]] [[position]]")}}

@empty

**Jeszcze nie zdefiniowano przedstawicieli**

@endforelse

@component('mail::button', ['url' => $accountUrlReps])
Dodaj / usuń Przedstawicieli 
@endcomponent

Przypominamy, że w ramach wykupionej jednej przestrzeni wystawienniczej otrzymujesz maksymalnie 4 vouchery obiadowe w cenie stoiska i 1 kartę parkingową. 

**Jeśli Przedstawicieli jest więcej niź 4 - dokup proszę vouchery obiadowe** (Panel wystawcy -> Udział w Targach -> Dodatkowe vouchery)

Pozdrawiam,

{{$footer}}

@endcomponent



