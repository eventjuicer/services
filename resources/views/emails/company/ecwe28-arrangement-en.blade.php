@component('mail::message')
 
Hello {{ array_get($profile, "fname") }},

## You can order some exhibition-space related services only till tomorrow (9th of October; EOD).

@component('mail::panel')

Important

If you are interested in a **free set of furniture (2 high chairs and 1 table), please order them (free!) via exhibitor's panel.**

@endcomponent

@component('mail::button', ['url' => $accountUrlArrangement])
Browse/order additional services
@endcomponent

## Exhibition-space related services

* Full **booth arrangement** FULLPRINT version (order untill 9th of October)

* **Counter** with overprint (order untill 9th of October)

* **Carpet**

* **50" or 75" LED screen**

* Independent **power connection: 3-phase 16/32A** - if you would like to connect coffee maker, etc

* Independent **power connection: 3kW (instead of the standard 300W)** if you plan to equip the stand other than 1-2 laptops and TV

* Additional furniture (for free set of 2 high chairs and 1 table please choose apropriate "product")


Best regards

{{$footer}}

@endcomponent


