@component('mail::message')
 
# Cześć {{ array_get($profile, "fname") }},

Do puli 6 nagród dla firm promujących swój profil Wystawcy oraz udział w Targach eHandlu dodaliśmy **2 nowe super-nagrody.**

## Pakiet Partnera Strefy VIP

## Wyróżnienie firmy na mapie Wystawców w papierowym katalogu

Pakiet Partnera Strefy VIP to możliwość zorganizowania dodatkowej ekspozycji (4m2) w Strefie VIP oraz realizowane przez nas świadczenia reklamowe (brandowane opaski dla VIPów, reklama na donicach). Wartość pakietu to ok 10 000 zł.

@component('mail::button', ['url' => $accountUrlRanking])
Sprawdź ranking i już przyznane świadczenia
@endcomponent

(WAŻNE: po kliknięciu na każdą nagrodę otrzymasz informację o warunkach jej przyznania - np minimalnej liczbie punktów)

## Jak skutecznie wspinać się w rankingu? 

Promuj publiczny profil Wystawcy]({{$profileUrl}}) wykorzystując własne kanały - np serwisy społecznościowe lub bazy newsletterowe.

Publiczny profil Wystawcy nie tylko opisuje Twoją firmę ale także:

* pokazuje **lokalizację Twojego stoiska** na hali targowej

* pozwala Zwiedzającym **umówić się na spotkanie** (po akceptacji takiej propozycji masz dostęp do pełnych danych kontaktowych)

## Jak to działa?

Ruch na Twoim publicznym profilu Wystawcy to punkty, które wymieniamy na super korzyści, m.in. **dostęp do puli early-bird** na kolejną edycję Targów, dostęp do **większej puli zaproszeń** Zwiedzających na spotkanie czy **większa liczbę zaproszeń VIP.**

## Materiały promocyjne

**Udostępniliśmy przykładowe materiały promocyjne**: bannery, szablony newslettera, linki do udostępniania profilu Wystawcy

@component('mail::button', ['url' => $accountUrlPromote])
Strona z materiałami dla Twojej firmy
@endcomponent

**Chcesz podesłać stronę z materiałami promocyjnymi innej osobie?** Prześlij ten link: {{$accountUrlPromotePublic}} - umożliwia on korzystanie z materiałów promocyjnych z wyłączeniem dostępu do innych części panelu.

Pozdrawiam, 

{{$footer}}




@endcomponent

