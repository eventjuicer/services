@component('mail::message')

Cześć {{$p->translate("[[fname]]") }} 

Twój bilet na czwartkowe 23 Targi eHandlu w Warszawie jest gotowy do pobrania i druku.

# [IDĘ / Pobieram bilet]({!! $going !!})

## [Nie Idę]({!! $notGoing !!})

@component('mail::panel')

Targi eHandlu odbędą się **6 kwietnia (czwartek) w Warszawie (EXPO XXI)**

**140 produktów i usług e-commerce** w ramach przestrzeni wystawienniczej

**37 prelegentów** w ramach 4 otwartych scen prezentacyjnych

21 Warszatów (wymagana rejestracja i akceptacja ze strony prowadzącego; [ostatnie miejsca na targiehandlu.pl/workshops](https://targiehandlu.pl/workshops) )

@endcomponent

Do zobaczenia! 

Zespół Targów eHandlu

@endcomponent