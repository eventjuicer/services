@component('mail::message')
 
# Cześć {{ array_get($profile, "fname") }},

**Udostępniliśmy materiały promocyjne**: bannery, szablony newslettera, linki do udostępniania profilu Wystawcy i tym samym kolejną edycję Konkursu dla Wystawców!

## Materiały

@component('mail::button', ['url' => $accountUrlPromote])
Strona z materiałami dla Twojej firmy
@endcomponent

**Chcesz podesłać stronę z materiałami promocyjnymi innej osobie?**

Prześlij ten link: {{$accountUrlPromotePublic}} - umożliwia on korzystanie z materiałów promocyjnych z wyłączeniem dostępu do innych części panelu.

Wszystkie materiały kierują [do Twojego publicznego profilu Wystawcy]({{$profileUrl}}). Ta strona nie tylko opisuje Twoją firmę ale także:

* pokazuje **lokalizację Twojego stoiska** na hali targowej

* pozwala Zwiedzającym **umówić się na spotkanie** (po akceptacji takiej propozycji masz dostęp do pełnych danych kontaktowych)

**Ruch na Twoim publicznym profilu Wystawcy to punkty, które wymieniamy na super korzyści**: **dostęp do puli early-bird** na kolejną edycję Targów, dostęp do **większej puli zaproszeń** Zwiedzających na spotkanie czy **większa liczbę zaproszeń VIP.**

Pozdrawiam, 

{{$footer}}

Jeśli chcesz się wyróżnić i masz możliwość przygotowania własnych materiałów graficznych - do kierowania na profil Wystawcy użyj "gołego" linka, który został podany na końcu strony z materiałami.

...ten link to:

@component('mail::panel')
[{{ $trackingLink }}]({{ $trackingLink }}) 
@endcomponent


@endcomponent

