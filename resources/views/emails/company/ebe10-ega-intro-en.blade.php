@component('mail::message')

# Hello {{ array_get($profile, "fname") }},

We’re bringing fresh energy to Messe Berlin! A new venue, new vibes, and a completely revamped Afterparty you won’t want to miss. The party kicks off on the evening of the first day of the Expo – the perfect way to unwind after a full day of business talks, networking, and deal-making. Grab a drink, catch up with colleagues, meet new faces, and let the music, laughter, and lively atmosphere recharge you for the rest of the expo. 

What to expect:

- a vibrant party right after the first expo day
- drinks, snacks and a fully stocked bar
- DJ, music and a lively atmosphere
- partner activation zones
- meetings with fellow industry colleagues: brands, retailers, shops, service providers, media - the whole e-commerce community in one place

Exhibitors get an exclusive perk: early bird tickets for 99 EUR until the end of the year. After that, the price increases. Each company can secure up to 4 tickets, and it’s strictly „first come, first served“.

@component('mail::button', ['url' => $accountUrlVouchers])
Buy your ticket here
@endcomponent

Don’t miss out on this exciting night of networking and celebration! If you have any questions, feel free to reach out.

Kind regards,

{{$footer}}

@endcomponent