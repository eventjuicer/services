

@component('mail::message')
 
# Cześć {{ array_get($profile, "fname")  }},

Dziękujemy za udział w 21. Targach eHandlu! 

Zabieramy się za sortowanie zdjęć z wydarzenia i planowanie kolejnej - jesiennej - edycji.

Mamy prośbą o wypełnienie krótkiej ankiety.

**...zadajemy w niej bardzo ważne pytanie dot. rozważanej zmiany w formule Targów.**

@component('mail::button', ['url' => "https://forms.gle/5DPJmLbrsMTQ2QXy7"])
Ankieta
@endcomponent

Jeśli Twój zespół skanował identyfikatory zwiedzających - [są one dostępne do pobrania w panelu Wystawcy.]({!! $accountUrlScans !!})


Regards, 

{{$footer}}

@endcomponent

