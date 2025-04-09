@component('mail::message')
 
# Cześć {{ array_get($profile, "fname")  }},

Dziękujemy za udział w 27 Targach eHandlu! 

Wyraź swoją opinię na temat minionej edycji Targów eHandlu.

@component('mail::button', ['url' => "http://ecwe.pl/s/jvdj"])
Ankieta
@endcomponent


## Niedługo przekażemy więcej informacji na temat wydarzenia E-commerce Warsaw Expo, które odbędzie się 24 października 2025

Hurtowa sprzedaż stoisk ruszy jeszcze w tym tygodniu. Sprzedaż early-bird oraz publiczna już przyszłym tygodniu. 

Regards, 

{{$footer}}

@endcomponent

