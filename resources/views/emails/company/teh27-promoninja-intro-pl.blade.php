@component('mail::message')
 
# Cześć {{ array_get($profile, "fname") }},

Wystartował konkurs dla Wystawców wiosennej edycji Targów eHandlu.

## Oto lista dostępnych nagród:

**Pakiet Partnera Strefy VIP**

**Zakup przestrzeni wystawienniczej na jesienne Targi w pierwszej kolejności**

**Wyróżnienie firmy na mapie Wystawców w papierowym katalogu**

**Graficzna reklama firmy w papierowym katalogu**

a także: prawo do dystrybucji ulotek, artykuł na ehandel.com.pl, wyróżnienie logotypu na stronie Targów.

Pakiet Partnera Strefy VIP to możliwość zorganizowania dodatkowej ekspozycji (4m2) w Strefie VIP oraz realizowane przez nas świadczenia reklamowe (brandowane opaski dla VIPów, reklama na donicach). Wartość pakietu to ok 10 000 zł.

@component('mail::button', ['url' => $accountUrlRanking])
Sprawdź ranking i już przyznane świadczenia
@endcomponent

(WAŻNE: po kliknięciu na każdą nagrodę otrzymasz informację o warunkach jej przyznania - np minimalnej liczbie punktów)

## Jak skutecznie wspinać się w rankingu? 

Promuj publiczny profil Wystawcy]({{$profileUrl}}) wykorzystując własne kanały - np serwisy społecznościowe lub bazy newsletterowe.

Publiczny profil Wystawcy nie tylko opisuje Twoją firmę ale także:

* pokazuje **lokalizację Twojego stoiska** na hali targowej

* pozwala Zwiedzającym **umówić się na spotkanie** (opcja dostępna już wkrótce!)

## Jak to działa?

Ruch na Twoim publicznym profilu Wystawcy to punkty, które wymieniamy na super korzyści wymienione powyżej.

## Materiały promocyjne

**Udostępniliśmy przykładowe materiały promocyjne**: bannery, szablony newslettera, linki do udostępniania profilu Wystawcy

@component('mail::button', ['url' => $accountUrlPromote])
Strona z materiałami dla Twojej firmy
@endcomponent

**Chcesz podesłać stronę z materiałami promocyjnymi innej osobie?** Prześlij ten link: {{$accountUrlPromotePublic}} - umożliwia on korzystanie z materiałów promocyjnych z wyłączeniem dostępu do innych części panelu.

Pozdrawiam, 

{{$footer}}




@endcomponent

