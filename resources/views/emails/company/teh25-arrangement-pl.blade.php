@component('mail::message')
 
Cześć {{ array_get($profile, "fname") }},

## Tylko do 6 października masz możliwość zamówienia wybranych, dodatkowych, usług związanych z przestrzenią wystawienniczą. 

@component('mail::panel')

**UWAGA:**

Podczas nadchodzącej edycji Targów eHandlu **bezpłatne meble (stolik, 2 wysokie krzesła) musisz zamówić BEZPŁATNIE w panelu wystawcy.** 

@endcomponent

@component('mail::button', ['url' => $accountUrlArrangement])
Zobacz/zamów usługi dodatkowe
@endcomponent

Oferowane usługi to:

* Kompleksowa **zabudowa przestrzeni** stoiska w wersji FULLPRINT

* Kompleksowa **zabudowa przestrzeni** stoiska w wersji OSB+logotyp

* **Lada** z nadrukiem

* **Wykładzina**

* **Ekran LED 50 cali** ze statywem

* **Ekran LED 75 cali** ze statywem

* Niezależne **podłączenie prądu - 3-fazowe 16A/32A** (jeśli planujesz korzystać np z ekspresu do kawy) 

* Niezależne **podłączenie prądu 3kW** (zamiast standardowych 300W) jeśli planujesz wyposażenie stoiska inne niż 1-2 laptopy i TV

* Dodatkowe meble (ponad te oferowane bezpłatnie o ile zostaną zamówione w panelu)

* Prawo do **dystrybucji ulotek** poza stoiskiem

 
Pozdrawiam,

{{$footer}}

@endcomponent



