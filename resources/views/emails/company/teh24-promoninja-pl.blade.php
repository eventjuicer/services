

@component('mail::message')
 
Cześć {{ array_get($profile, "fname") }},

Pragniemy przypomnieć, że **każdy Wystawca ma swój [publiczny profil Wystawcy]({{$profileUrl}})**.

Ta strona nie tylko opisuje Twoją firmę i oferowane produkty i usługi ale także:

* pokazuje **lokalizację Twojego stoiska** na hali targowej

* pozwala Zwiedzającym **umówić się na spotkanie**. Po akceptacji takiej propozycji **masz dostęp do pełnych danych kontaktowych a Zwiedzający ma dostęp do strefy VIP**

##...zatem warto ją promować by wyjechać z Targów z niekończącą się listą kontaktów. 

Efektem ubocznym promowania swojego publicznego profilu Wystawcy jest zdobywanie punktów w Konkursie dla Wystawców! **PUNKTY ZOSTAŁY ODSŁONIĘTE**

##Przypominamy, że **udostępniliśmy materiały promocyjne**: bannery, szablony newslettera, linki do udostępniania profilu Wystawcy w serwisach społecznościowych

@component('mail::button', ['url' => $accountUrlPromote])
Strona z materiałami promo dla Twojej firmy
@endcomponent

**Chcesz podesłać stronę z materiałami promocyjnymi innej osobie?**

Prześlij ten link: {{$accountUrlPromotePublic}} - umożliwia on korzystanie z materiałów promocyjnych z wyłączeniem dostępu do innych części panelu.

## Konkurs dla Wystawców

Wszystkie materiały kierują do Twojego publicznego profilu Wystawcy - {{$profileUrl}}. 

**Ruch na Twoim publicznym profilu Wystawcy to punkty, które wymieniamy na super korzyści**: 

**dostęp do puli early-bird** na kolejną edycję Targów, 

dostęp do **większej puli zaproszeń** Zwiedzających na spotkanie czy 

**większa liczbę zaproszeń VIP.**

i inne (uzyskanie konkretnych świadczeń możesz sprawdzić w Rankingu w ramach Panelu Wystawcy)

Jeśli chcesz się wyróżnić i masz możliwość przygotowania własnych materiałów graficznych - do kierowania na profil Wystawcy użyj "gołego" linka.

...ten link to:

@component('mail::panel')
[{{ $trackingLink }}]({{ $trackingLink }}) 
@endcomponent


Pozdrawiam, 

{{$footer}}



@endcomponent