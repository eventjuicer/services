@component('mail::message')
 
# Cześć {{ array_get($profile, "fname")  }},

**właśnie ruszyła otwarta sprzedaż** dla wszystkich zainteresowanych powierzchnią wystawienniczą na jesiennych Targach eHandlu. 

Data targów: 27 października w Warszawie - EXPO XXI.

**Mapka i ceny dostępne na [targiehandlu.pl/exhibit](https://targiehandlu.pl/exhibit)**

UWAGA: system nie pozwala na jednoczesną rezerwację 2 stoisk z tej samej kategorii cenowej (np 2x HOT, 2x ULTRA). W przypadku chęci rezerwacji stoisk w takiej konfiguracji prosimy o oddzielne transakcje.

UWAGA (2): niedostępne przestrzenie (oznaczone kolorem szarym) - to stoiska z przedsprzedaży "hurtowej" (>2 przestrzeni) lub sprzedaży dla TOP30 konkursu dla Wystawców (zdobywców nagrody "Rezerwacja EarlyBird" )


Pozdrowienia, 

{{$footer}}

@endcomponent

