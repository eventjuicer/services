@component('mail::message')
 
# Cześć {{ array_get($profile, "fname")  }},

Jutro - **w środę o 11:00** - rusza otwarta sprzedaż dla wszystkich zainteresowanych powierzchnią wystawienniczą na wiosennych Targach eHandlu. Data targów: 11 kwietnia w Warszawie - EXPO XXI.

**Mapka i ceny dostępne na [targiehandlu.pl/exhibit](https://targiehandlu.pl/exhibit)**

W dniu dzisiejszym rozpoczęła się sprzedaż dla TOP30 konkursu dla Wystawców - część powierzchni została już zarezerwowana.

Pozdrowienia, 

{{$footer}}

@endcomponent

