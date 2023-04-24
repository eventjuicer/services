@component('mail::message')
 
Cześć {{ array_get($profile, "fname")  }},


# Posortowaliśmy zdjęcia z Targów. Poniżej "paczka" zdjęć dotycząca Twojej firmy.

@component('mail::button', ['url' => $photosUrl ])
Zdjęcia z 23. Targów eHandlu (.zip)
@endcomponent


# Sprzedaż przestrzeni wystawienniczej na 24. Targi eHandlu (27 października 2023 w Warszawie - EXPO XXI) dla Wystawców spoza Top30 rankingu Konkursu dla Wystawców poprzedniej edycji Targów


@component('mail::panel')

**Środa - 26 kwietnia 11:00**

[Układ hali, ceny](https://targiehandlu.pl/exhibit)

@endcomponent 



Pozdrowienia, 

{{$footer}}

@endcomponent

