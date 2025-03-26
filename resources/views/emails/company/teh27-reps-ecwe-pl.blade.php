@component('mail::message')
 
# Cześć {{ array_get($profile, "fname")  }},

W aplikacji eventowej E-commerce Warsaw Expo, do której mają dostęp wszyscy zarejestrowani uczestnicy najbliższych Targów, dodaliśmy sekcję dedykowanym Przedstawicielom Wystawcy.

Korzystając z sekcji Business możesz zwiększyć konwersję z udziału w targach podejmując działania już teraz.

## Jako Przedstawiciel Wystawcy możesz:

**Zapraszać uczestników VIP (klientów, prospectów)** którzy będą mieli dostęp do Strefy VIP 

**Przeglądać uczestników Targów i nawiązywać z nimi kontakt jeszcze przed Targami**

a także przeglądać listę zeskanowanych podczas Targów osób i pobierać listę kontaktów jako plik .CSV

## Sprawdź szczegóły, sprawdź pozostałe limity VIP i zaproszeń do kontaktu, sprawdź jak radzą sobie inni Wystawcy

@component('mail::button', ['url' => $eventAppUrlBusiness])
Szybkie logowanie do ecwe.pl/business
@endcomponent

Przygotowaliśmy także ranking zaangażowania Wystawców :) Najbardziej zaangażowani (na ten moment) to: 

* Brandly360
* olzalogistic.com
* PostNord International
* Romania Express
* Waynet


Regards, 

{{$footer}}

@endcomponent

