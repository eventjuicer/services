@component('mail::message')
 
# Cześć {{ array_get($profile, "fname")  }},

Każdy przedstawiciel Wystawcy obecny na jutrzejszych Targach eHandlu może wykorzystać swój smartfon do skanowania identyfikatorów Zwiedzających.

**Skanowanie odbywa się za pomocą funkcji robienia zdjęć smartfona**, kod QR na identyfikatorze Zwiedzającego otwiera link w ramach aplikacji eventowej ECWE.

Przy pierwszym skanowaniu konieczne jest zalogowanie się - użyj adresu {{$email}}. Po otrzymaniu linka logującego na email - skopiuj i wklej do paska adresu przeglądarki, która została otwarta po skanowaniu identyfikatora.

Kolejne skanowania będą szybsze :)

Pozyskane dane kontaktowe można pobrać w ramach zakładki Kontakty lub na stronie głównej aplikacji eventowej.

Proces można przećwiczyć skanując kod QR znajdujący się na bilecie Organizatora -  https://ecwe.pl/api/tickets/pkdyrv

Regards, 

{{$footer}}

@endcomponent

