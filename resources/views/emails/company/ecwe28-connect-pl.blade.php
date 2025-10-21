@component('mail::message')
 
# Cześć {{ array_get($profile, "fname") }},

W panelu Wystawcy, w sekcji Przedstawiciele Wystawcy, pojawiła się opcja pobrania linku logującego do platformy networkingowej.

Pomimo, że - przez wprowadzenie biletów - spotkamy się w bardziej "sprofilowanym" gronie, zachęcamy do nawiązania kontaktu przed Targami.

@component('mail::button', ['url' => $accountUrlReps])
Zaloguj się do swojego konta
@endcomponent

Informację dotyczącą bezłatnych zaproszeń VIP planujemy wysłać dzisiaj.

Regards, 

{{$footer}}

@endcomponent
