@component('mail::message')

# Hi {{ array_get($profile, "fname") }},

*Networking Party and E-commerce Germany Awards* are the inseparable part of the E-commerce Berlin Expo. The event is taking place on *February 21st* in Spindler & Klatt club.

If you have already purchased tickets, you can now register your representatives for the Networking Party on the exhibitor platform. Please add them in the “Networking party participants” section by **February 6th at the latest**.

The number of guests you can register **must be equal to the number of tickets you have actually acquired.**

@component('mail::button', ['url' => $accountUrlParty])
ADD PARTY REPRESENTATIVES
@endcomponent

If you haven't purchased the tickets yet or would like to buy some extra, you can still do so in the “Additional vouchers and tickets” section - each additional ticket costs 99 EUR net. The quantity of additional tickets is solely limited by the capacity of the venue.

If you have any questions, please let me know.

Best regards,

{{$footer}}

@endcomponent