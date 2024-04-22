@component('mail::message')
 
# Cześć {{ array_get($profile, "fname")  }},

Przygotowaliśmy zdjęcia z Targów, które dotyczą Twojej firmy.

@component('mail::button', ['url' => $photosUrl ])
Pobierz zdjęcia (.zip)
@endcomponent


Przypominamy o terminie startu sprzedaży powierzchni wystawienniczej na 26. Targi eHandlu (25 października 2024 w Warszawie - EXPO XXI)


@component('mail::panel')

# Środa - 24 kwietnia 11:00

Start sprzedaży dla Twojej firmy (Wystawców spoza grona Top30 rankingu Konkursu dla Wystawców poprzedniej edycji Targów); Start otwartej sprzedaży.

[Układ hali, ceny](https://targiehandlu.pl/exhibit)


@endcomponent





Pozdrowienia, 

{{$footer}}

@endcomponent

