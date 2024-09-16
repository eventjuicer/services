

@component('mail::message')
 
# Cześć {{ array_get($profile, "fname")  }},

Dziękujemy za udział w XXV Targach eHandlu! 

# Mamy prośbą 

Wyraź, proszę, swoją opinię na temat minionej edycji Targów eHandlu.

@component('mail::button', ['url' => "https://forms.gle/s5QcrV486ZV3xsEM6"])
Ankieta
@endcomponent

# Kolejna edycja odbędzie się 25 października 2024

Sprzedaż stoisk ruszy w przyszłym tygodniu. 


Regards, 

{{$footer}}

@endcomponent

