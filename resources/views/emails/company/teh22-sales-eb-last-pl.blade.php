@component('mail::message')
 
# Cześć {{ array_get($profile, "fname")  }},

**Dzisiaj - o 11:00** - rusza otwarta sprzedaż dla wszystkich zainteresowanych powierzchnią wystawienniczą na jesiennych Targach eHandlu (27 października w Warszawie - EXPO XXI)

**Mapka i ceny dostępne na [targiehandlu.pl/exhibit](https://targiehandlu.pl/exhibit)**

W dniu wczorajszym miała miejsce sprzedaż dla TOP30 konkursu dla Wystawców - stąd część stoisk została już zarezerwowana.

Pozdrowienia, 

{{$footer}}

@endcomponent

