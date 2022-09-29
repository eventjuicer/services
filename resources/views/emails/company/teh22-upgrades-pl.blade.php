

@component('mail::message')
 
# Cześć {{ array_get($profile, "fname") }},

**W panelu Wystawcy możesz rozszerzyć swoje zamówienie o dodatkowe usługi.**

## Usługi premium - [account.targiehandlu.pl/#/premium]({!! $accountUrlPremium !!})

* Prawo do **dystrybucji ulotek** poza stoiskiem

* Dystrybucja smyczy z logotypem Twojej firmy

* **Sponsor strefy cateringu** dla zwiedzających

* **Sponsor strefy VIP** (Wystawcy, Prelegenci, Goście VIP)


## Wyposażenie stoiska - [account.targiehandlu.pl/#/arrangement]({!! $accountUrlArrangement !!})

* Kompleksowa **zabudowa przestrzeni** stoiska w wersji FULLPRINT

* Kompleksowa **zabudowa przestrzeni** stoiska w wersji OSB+logotyp

* **Lada** z nadrukiem

* **Wykładzina**

* Dodatkowe meble

* **Ekran LED 50 cali** ze statywem

* Niezależne podłączenie prądu 3kW (zamiast standardowych 300W) jeśli planujesz wyposażenie stoiska inne niż 1-2 laptopy i TV


## Dodatkowe vouchery cateringowe i dodatkowe karty parkingowe [account.targiehandlu.pl/#/vouchers]({!! $accountUrlVouchers !!})

> Standardowo otrzymujesz nie więcej niż 4 vouchery cateringowe (dokładnie tyle ilu zarejestrujesz Przedstawicieli Firmy ale nie więcej niż 4 - o ile nie dokupisz dodatkowych) oraz 1 kartę parkingową


@component('mail::button', ['url' => $accountUrl])
Zaloguj się do Panelu Wystawcy 
@endcomponent

Pozdrawiam

{{$footer}}

@endcomponent



