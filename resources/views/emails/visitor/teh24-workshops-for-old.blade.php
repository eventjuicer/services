@component('mail::message')

Cześć {{ $p->translate("[[fname]]") }}!

## Wystartowały zgłoszenia na 18 wyjątkowych Warsztatów Targów eHandlu. 

Mamy tylko 432 miejsca. 

**NOWA FORMUŁA: W tej edycji możesz zgłosić się aż na 6 warszatatów - jeden w każdym slocie godzinowym.**


@component('mail::button', ['url' => 'https://targiehandlu.pl/workshops'])
Sprawdź listę Warsztatów i zgłoś się
@endcomponent


## Wybrane tematy

Jak efektywnie zarządzać dostawami i zwrotami.

Analiza RFM. Jak ją wykorzystać do personalizacji reklam Meta Ads i osiągnąć ROAS +3000%?

Allegro Ads - praktyczny przewodnik

...wykorzystanie klubów członkowskich w budowaniu retencji.

jak zbierać i prezentować opinie, by twoje reklamy produktowe nie zostały zablokowane.

O czym należy pamiętać wdrażając duży sklep na PrestaShop?

Analiza konkurencji w Google Ads i Social Ads 

PrestaShop Checkout

[Lista wszystkich warsztatów, zgłoszenia](https://targiehandlu.pl/workshops)


## Zasady

**Udział** w Warsztatch w tej edycji jest **bezpłatny.**

Akceptacja zgłoszeń przez Prowadzących rozpocznie się nie wcześniej niż w czwartek 19 października.

Otrzymasz wiadomość zwrotną przy akceptacji.

Każdy Uczestnik Warsztatów **otrzymuje status VIP** (dostęp do Strefy VIP dla Wystawców i Prelegentów)

Czas warsztatu to maksymalnie **45 minut** (30min + 15min na Q&A)


@component('mail::panel')

Przypominamy, że 24. Targi eHandlu odbędą się **27 października w EXPO XXI w Warszawie.**

Targi eHandlu to **4 sceny** z prezentacjami Ekspertów oraz **150 Wystawców** - oferentów usług i produktów wspierających handel w Internecie.

...**oraz 18 warsztatów**

@endcomponent


**Niezależnie od warsztatów [dostępne są aż 4 sceny prezentacyjne](https://targiehandlu.pl/visit)** (udział bezpłatny, otwarty, wymagana rejestracja jako Zwiedzający)



Pozdrawiamy,

Zespół Targów eHandlu

**[Konfiguracja newslettera]({{ $unsubscribe }})**


@endcomponent

