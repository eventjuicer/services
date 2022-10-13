

@component('mail::message')
 
# Cześć {{ array_get($profile, "fname") }},

Przypominamy, że **w panelu Wystawcy możesz rozszerzyć swoje zamówienie o dodatkowe usługi.**



@component('mail::panel')

**Od poniedziałku planujemy podnieść ceny większości "usług dodatkowych" o minimum 20%. **

Dlaczego? Naszą intencją jest przeprocesowanie Państwa zamówień kiedy jest to optymalne i nie zagraża (jeszcze) jakości realizacji wydarzenia.

Zamawianie usług dodatkowych kilka dni przed wydarzeniem bardzo utrudnia nam organizację Targów. Dziękujemy za zrozumienie.

@endcomponent


## Usługi dodatkowe podzieliliśmy na 3 grupy

## Wyposażenie stoiska - [account.targiehandlu.pl/#/arrangement]({!! $accountUrlArrangement !!})

* ~~Kompleksowa **zabudowa przestrzeni** stoiska w wersji FULLPRINT~~ SPRZEDAŻ ZAKOŃCZONA

* ~~Kompleksowa **zabudowa przestrzeni** stoiska w wersji OSB+logotyp~~ SPRZEDAŻ ZAKOŃCZONA

* ~~**Lada** z nadrukiem~~ SPRZEDAŻ ZAKOŃCZONA

* **Wykładzina**

* Dodatkowe meble

* **Ekran LED 50 cali** ze statywem

* Podłączenie prądu 3kW (zamiast standardowych 300W) jeśli planujesz wyposażenie stoiska inne niż 1-2 laptopy i TV


## Dodatkowe vouchery cateringowe i dodatkowe karty parkingowe [account.targiehandlu.pl/#/vouchers]({!! $accountUrlVouchers !!})

> Standardowo otrzymujesz nie więcej niż 4 vouchery cateringowe (dokładnie tyle ilu zarejestrujesz Przedstawicieli Firmy ale nie więcej niż 4 - o ile nie dokupisz dodatkowych) oraz 1 kartę parkingową


## Usługi premium - [account.targiehandlu.pl/#/premium]({!! $accountUrlPremium !!})

* ~~**Sponsor strefy VIP** (Wystawcy, Prelegenci, Goście VIP)~~ SPRZEDANE

* Prawo do **dystrybucji ulotek** poza stoiskiem

* Dystrybucja smyczy z logotypem Twojej firmy

* **Sponsor strefy cateringu** dla zwiedzających




@component('mail::button', ['url' => $accountUrl])
Zaloguj się do Panelu Wystawcy 
@endcomponent

Pozdrawiam

{{$footer}}

@endcomponent



