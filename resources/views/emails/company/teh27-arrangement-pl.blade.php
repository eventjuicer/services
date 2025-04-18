@component('mail::message')
 
Cześć {{ array_get($profile, "fname") }},

## Tylko do 14 marca masz możliwość zamówienia wybranych, dodatkowych, usług związanych z przestrzenią wystawienniczą. 

@component('mail::panel')

**UWAGA:**

Podczas nadchodzącej edycji Targów eHandlu **bezpłatne meble (stolik, 2 wysokie krzesła) musisz zamówić BEZPŁATNIE w panelu wystawcy.** 

@endcomponent

@component('mail::button', ['url' => $accountUrlArrangement])
Zobacz/zamów usługi dodatkowe
@endcomponent

Oferowane usługi to między innymi:

* Kompleksowa **zabudowa przestrzeni** stoiska w wersji FULLPRINT (zamów do 14 marca)

* **Lada** z nadrukiem  (zamów do 14 marca)

* **Wykładzina**

* **Ekrany LED 50 i 75cali** ze statywem

* Niezależne **podłączenie prądu - 3-fazowe 16A/32A** (jeśli planujesz korzystać np z ekspresu do kawy) 

* Niezależne **podłączenie prądu 3kW** (zamiast standardowych 300W) jeśli planujesz wyposażenie stoiska inne niż 1-2 laptopy i TV

* Dodatkowe meble (ponad te oferowane bezpłatnie o ile zostaną zamówione w panelu)

 
Pozdrawiam,

{{$footer}}

@endcomponent



