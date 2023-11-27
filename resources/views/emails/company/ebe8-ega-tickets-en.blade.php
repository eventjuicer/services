@component('mail::message')

# Hello {{ array_get($profile, "fname") }},

We are thrilled to announce the upcoming return of our exclusive **Networking Party** on February 21st in Berlin, scheduled for one night before the E-commerce Berlin Expo.

We have some exciting news just in time for the **Black Week**.

The Networking Party is an integral part of the much-celebrated [E-Commerce Germany Awards](https://ecommercegermanyawards.com?utm_source=email&utm_medium=email&utm_campaign=exhibitors_system_ega).

As an exhibitor, you have a special opportunity to be part of this prestigious event. What's even better is that during the Black Week, you can secure your gala ticket for an incredible price of only **90 euros** (30 euros off the regular price). Hurry up, as the number of tickets is limited!

@component('mail::button', ['url' => $accountUrlVouchers])
Buy your ticket here
@endcomponent

Don't miss out: the offer is valid only from **November 27th till December 1st (4 pm)**.

Should you have any questions, do not hesitate to contact me.

Kind regards,

{{$footer}}
@endcomponent