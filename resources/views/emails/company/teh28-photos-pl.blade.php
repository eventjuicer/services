@component('mail::message')
 
# Cześć {{ array_get($profile, "fname")  }},

Przygotowaliśmy zdjęcia z minionych Targów eHandlu, które dotyczą Twojej firmy.

@component('mail::button', ['url' => $photosUrl ])
Pobierz zdjęcia (.zip)
@endcomponent


Pozdrowienia, 

{{$footer}}

@endcomponent

