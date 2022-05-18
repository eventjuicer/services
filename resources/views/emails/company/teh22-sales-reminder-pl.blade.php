@component('mail::message')
 
# Cześć {{ array_get($profile, "fname")  }},

Już jutro - **w czwartek o 11:00** - rusza otwarta sprzedaż dla wszystkich zainteresowanych powierzchnią wystawienniczą na jesiennych Targach eHandlu (27 października w Warszawie - EXPO XXI)

**Mapka i ceny dostępne na [targiehandlu.pl/exhibit](https://targiehandlu.pl/exhibit)**

W dniu dzisiejszym trwa sprzedaż dla TOP30 konkursu dla Wystawców - stąd część stoisk została już zarezerwowana.

Pozdrowienia, 

{{$footer}}

@endcomponent

