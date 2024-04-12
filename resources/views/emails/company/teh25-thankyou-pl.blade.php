

@component('mail::message')
 
# Cześć {{ array_get($profile, "fname")  }},

Dziękujemy za udział w 24. Targach eHandlu! 

# Mamy prośbą 

Wyraź, proszę, swoją opinię na temat minionej edycji Targów eHandlu.

@component('mail::button', ['url' => "https://forms.gle/Sz5a6r7FWjGnS7we8"])
Ankieta
@endcomponent

# Mamy zdjęcia!

@component('mail::button', ['url' => $photosUrl ])
Pobierz zdjęcia Twojej firmy (.zip)
@endcomponent

# Kolejna edycja 11 kwietnia 2024

Sprzedaż hurtowa stoisk ruszy jeszcze w tym tygodniu. 

**Sprzedaż dla TOP30 Konkursu Wystawców oraz early-bird dla reszty Wystawców ruszy w przyszłym tygodniu (szczegóły jeszcze w tym tygodniu)**

Regards, 

{{$footer}}

@endcomponent

