@component('mail::message')

# Hi {{ array_get($profile, "fname") }},

An inseparable part of the E-commerce Berlin Expo is the **Networking Party together with the E-commerce Germany Awards Ceremony**, taking place one day before the fair - on **February 22nd in Spindler & Klatt in Berlin.**

You can already register your representatives for the Networking Party in the exhibitor’s profile. Please add them in the “Networking party participants” section by **February 6th at the latest**.

@component('mail::button', ['url' => $accountUrlParty])
ADD PARTY REPRESENTATIVES
@endcomponent

- Standard & Hot - **0 free tickets included in exhibitor’s package**
- Super HOT & Ultra - 1 ticket included in exhibitor’s package
- Grand & Grand premium - 2 tickets included in exhibitor’s package

If you’d like to book additional tickets, you can do so in the “Additional vouchers and tickets” section - each additional ticket costs 79 EUR net. The quantity of additional tickets is solely limited by the capacity of the venue.

If you have any questions, please let me know.

{{$footer}}

@endcomponent