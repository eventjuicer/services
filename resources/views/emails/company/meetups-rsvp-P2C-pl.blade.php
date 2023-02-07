@component('mail::message')
 
Cześć

W Panelu Wystawcy czekają zaproszenia od Uczestników Targów eHandlu wysłane przez publiczny profil Wystawcy.

Bardzo prosimy o przetworzenie ich :)

Akceptacja ujawnia dane kontaktowe Uczestnika oraz nadaje mu status VIP.


@component('mail::button', ['url' => $url])
Zobacz listę osób chcących się spotkać
@endcomponent


pozdrowienia

{{$footer}}

@endcomponent