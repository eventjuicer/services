@component('mail::message')
 
Cześć

W Panelu Wystawcy czekają **zaproszenia od Uczestników Targów eHandlu wysłane przez publiczny profil Wystawcy.**

Bardzo prosimy o przetworzenie ich :)

Akceptacja ujawnia dane kontaktowe Uczestnika oraz nadaje mu status VIP.

@component('mail::button', ['url' => $url("meetups") ])
Zobacz listę osób chcących się spotkać
@endcomponent

@component('mail::panel')

Aby otrzymywać więcej takich zaproszeń i zwiększyć konwersję udziału w Targach - promuj swój [publiczny profil Wystawcy]({!!$profileUrl!!}).

[Materiały promocyjne]({!!$accountUrlPromotePublic!!}) 

@endcomponent

pozdrowienia

{{$footer}}

@endcomponent