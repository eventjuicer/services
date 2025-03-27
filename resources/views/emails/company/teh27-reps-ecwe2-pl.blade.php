@component('mail::message')
 
# Cześć {{ array_get($profile, "fname")  }},

**Na prośbę kilku Wystawców zwiększyliśmy limity zaproszeń VIP i zapraszania zarejestrowanych Zwiedzających do kontaktu.**

Dla przypomnienia:

Korzystając z sekcji Business w aplikacji eventowej Targów eHandlu (https://ecwe.pl/business) możesz:

**Zapraszać uczestników VIP (klientów, prospectów)** którzy będą mieli dostęp do Strefy VIP 

limit (per Wystawca) zwiększony do 20

**Przeglądać uczestników Targów i nawiązywać z nimi kontakt jeszcze przed Targami**

limit (per Wystawca)  zwiększony do 75 

a także przeglądać listę zeskanowanych podczas Targów osób i pobierać listę kontaktów jako plik .CSV

@component('mail::button', ['url' => $eventAppUrlBusiness])
Szybkie logowanie do ecwe.pl/business
@endcomponent

Zmiany w rankingu najbardziej zaangażowanych w networking Wystawców:

Top 3

* Romania Express
* Brandly360
* IDEA commerce S.A


Regards, 

{{$footer}}

@endcomponent

