@component('mail::message')
 
Cześć {{ array_get($profile, "fname")  }},


# Posortowaliśmy zdjęcia z Targów. Poniżej "paczka" zdjęć dotycząca Twojej firmy.

@component('mail::button', ['url' => $photosUrl ])
Zdjęcia z 23. Targów eHandlu (.zip)
@endcomponent


# Ekskluzywna sprzedaż dla firm z TOP30 Konkursu dla Wystawców czyli dla Twojej firmy

@component('mail::panel')

**Wtorek - 25 kwietnia 11:00**

[Układ hali, ceny](https://targiehandlu.pl/top30_13wa44w7S)

@endcomponent


Pozdrowienia, 

{{$footer}}

@endcomponent