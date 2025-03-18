

@component('mail::message')
 
# Cześć {{ array_get($profile, "fname")  }},

Dziękujemy za udział w 26 Targach eHandlu! 

# Mamy prośbą 

Wyraź, proszę, swoją opinię na temat minionej edycji Targów eHandlu.

@component('mail::button', ['url' => "https://forms.gle/bRdcurAiSfwpaLmJ6"])
Ankieta
@endcomponent

# Kolejna edycja odbędzie się 3 kwietnia 2025

Sprzedaż stoisk ruszy w przyszłym tygodniu. 


Regards, 

{{$footer}}

@endcomponent

