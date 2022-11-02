

@component('mail::message')
 
# Cześć {{ array_get($profile, "fname")  }},

Dziękujemy za udział w 22. Targach eHandlu! 

Zabieramy się za sortowanie zdjęć z wydarzenia i planowanie kolejnej - wiosennej - edycji.

Mamy prośbą o wyrażenie swojej opinii na temat minionych Targów eHandlu - link do ankiety poniżej.

@component('mail::button', ['url' => "https://docs.google.com/forms/d/e/1FAIpQLSdCX0JmQDrQ9pAxcmFZlLXHH9Y3UumfpkjVsbJEGnVC3qv56Q/viewform"])
Ankieta
@endcomponent

**Jeśli Twój zespół skanował identyfikatory zwiedzających - [są one dostępne do pobrania w panelu Wystawcy.]({!! $accountUrlScans !!})**


Regards, 

{{$footer}}

@endcomponent

