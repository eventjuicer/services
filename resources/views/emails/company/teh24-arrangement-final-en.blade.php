@component('mail::message')
 
Hello {{ array_get($profile, "fname") }},

## I would like to remind you that we are ending offering additional services related to the exhibition space

(Some additional services are no longer available)

@component('mail::panel')

Important

If you are interested in a **free set of furniture (2 high chairs and 1 table), please order them (free!) via exhibitor's panel.**

@endcomponent

@component('mail::button', ['url' => $accountUrlArrangement])
Browse/order additional services
@endcomponent

## The services currently available are:

* **Carpet**

* **50'' LED screen**

* **75'' LED screen**

* Independent **power connection: 3-phase 16/32A** - if you would like to connect coffee maker, etc

* Independent **power connection: 3kW (instead of the standard 300W)** if you plan to equip the stand other than 1-2 laptops and TV

* Permission for **distributing leaflets** outside the stand

* Additional furniture (for free set of 2 high chairs and 1 table please choose apropriate "product")


@component('mail::button', ['url' => $accountUrlArrangement])
Browse/order additional services
@endcomponent


Best regards

{{$footer}}

@endcomponent


