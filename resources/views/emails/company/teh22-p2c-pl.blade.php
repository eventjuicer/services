

@component('mail::message')
 
# Cześć {{ array_get($profile, "fname")  }},

[Na Twoim publicznym profilu Wystawcy]({!! $trackingLink !!}) pojawiła się nowa funkcjonalność "UMÓW SIĘ NA SPOTKANIE".

## Jak to działa? 

Od teraz także **Zwiedzający mogą być inicjatorami spotkania z Wystawcą**

Wszystkie zaproszenia od Zwiedzających lądują w zakładce **RSVPs** w Panelu Wystawcy (będziemy także Cię powiadamiać o oczekujących zaproszeniach)

Potwierdzając chęć spotkania **otrzymujesz natychmiastowy dostęp do danych kontaktowych Zwiedzającego**

Zwiedzący, który ma umówione spotkanie **otrzymuje automatycznie status VIP** i ma nielimitowany dostęp do Strefy VIP.

**Może zatem warto promować swój profil Wystawcy? :)**

## Jak promować swój profil Wystawcy? 

Użyj [strony z gotowymi materiałami dla Twojej firmy]({!! $accountUrlPromote !!}) lub promuj się tak jak chcesz z wykorzystaniem Twojego URLa - {!! $trackingLink !!}

Pamiętaj, że strona z materiałami promocyjnym jest publiczna. Adres URL do tej strony - {!! $accountUrlPromote !!} - możesz wysłać osobie odpowiedzialnej za działania reklamowe w firmie.



Regards, 

{{$footer}}

@endcomponent

