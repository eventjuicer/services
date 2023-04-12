

@component('mail::message')
 
# Cześć {{ array_get($profile, "fname")  }},

Dziękujemy za udział w 23. Targach eHandlu! 

Zabieramy się za sortowanie zdjęć z wydarzenia i planowanie kolejnej - jesiennej - edycji (27 października 2023).

Mamy prośbą o wyrażenie swojej opinii na temat minionych Targów eHandlu - link do ankiety poniżej.

@component('mail::button', ['url' => "https://docs.google.com/forms/d/e/1FAIpQLSfmP5ODb1L4GddSGkYATZF6a1RYXQUy0rL1SO5FGzPbanjZBg/viewform"])
Ankieta
@endcomponent

**Jeśli Twój zespół skanował identyfikatory zwiedzających - [są one dostępne do pobrania w panelu Wystawcy.]({!! $accountUrlScans !!})** Komentarze widoczne są jedynie w wyeksportowanym pliku.


Regards, 

{{$footer}}

@endcomponent

