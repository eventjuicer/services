@component('mail::message')
 
# Cześć {{ array_get($profile, "fname")  }},

Jutro - **w czwartek o 11:00** - rusza otwarta sprzedaż dla wszystkich zainteresowanych powierzchnią wystawienniczą na wiosennych Targach eHandlu. Data targów: 6 kwietnia w Warszawie - EXPO XXI.

**Mapka i ceny dostępne na [targiehandlu.pl/exhibit](https://targiehandlu.pl/exhibit)**

W dniu dzisiejszym (środa), od 11:00, rozpocznie się sprzedaż dla TOP30 konkursu dla Wystawców - część stoisk zostanie  zarezerwowana.

Pozdrowienia, 

{{$footer}}

@endcomponent

