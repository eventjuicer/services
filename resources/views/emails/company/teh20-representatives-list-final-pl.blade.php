

@component('mail::message')
 
# Cześć  {{ array_get($profile, "fname") }},

**Dzisiaj (do końca dnia) jest DEADLINE na dodanie przedstawicieli Wystawcy, którzy będą reprezentować firmę na Stoisku.** We wtorek rano identyfikatory idą do druku :) 

# Lista zdefiniowanych osób

@forelse($representatives as $rep)

	{{$rep->translate("[[fname]] [[lname]] [[position]]")}}

@empty

**Jeszcze nie zdefiniowano przedstawicieli**

@endforelse

@component('mail::button', ['url' => $accountUrl])
Dodaj / usuń Przedstawicieli 
@endcomponent

Przypominamy, że w ramach wykupionej przestrzeni wystawienniczej otrzymujesz maksymalnie 4 vouchery obiadowe w cenie stoiska i 1 kartę parkingową. **Jeśli Przedstawicieli jest więcej niź 4 - dokup proszę vouchery obiadowe** (Panel wystawcy -> Usługi dodatkowe.)

Pozdrawiamy,

Karolina Michalak

@endcomponent



