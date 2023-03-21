@component('mail::message')
 
Cześć {{ array_get($profile, "fname") }},

## To już ostatnie dni na zamówienie usług dodatkowych związanych z przestrzenią wystawienniczą. 

(Zgodnie z wiadomością z poprzedniego tygodnia, część świadczeń jest już niedostępna.)

@component('mail::panel')

**UWAGA:**

Podczas nadchodzącej edycji Targów eHandlu, **aby otrzymać bezpłatne meble (stolik, 2 wysokie krzesła) musisz je zamówić w panelu wystawcy.** (świadczenie pozostaje BEZPŁATNE)

@endcomponent

@component('mail::button', ['url' => $accountUrlArrangement])
Zobacz/zamów usługi dodatkowe
@endcomponent

## Aktualnie dostępne jeszcze usługi to:

* **Wykładzina**

* **Ekran LED 75 cali** ze statywem

* Niezależne **podłączenie prądu - 3-fazowe 16A/32A** (jeśli planujesz korzystać np z ekspresu do kawy) 

* Niezależne **podłączenie prądu 3kW** (zamiast standardowych 300W) jeśli planujesz wyposażenie stoiska inne niż 1-2 laptopy i TV

* Dodatkowe meble (ponad te oferowane bezpłatnie o ile zostaną zamówione w panelu)

* Prawo do **dystrybucji ulotek** poza stoiskiem


@component('mail::button', ['url' => $accountUrlArrangement])
Zobacz/zamów usługi dodatkowe
@endcomponent



Pozdrawiam,

{{$footer}}

@endcomponent



