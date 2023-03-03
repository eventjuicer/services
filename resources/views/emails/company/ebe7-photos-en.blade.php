@component('mail::message')

# Hello, {{ array_get($profile, "fname") }},

Thank you again for joining us at the E-commerce Berlin Expo 2023. We hope you had a great time and met valuable contacts!

(1)

To help us improve the next event, we kindly request that you take a few minutes to complete our short survey.

It's essential to us, and we've received about 30% of the responses.

**If you haven't done it yet, please fill it out.**

@component('mail::button', ['url' => 'https://docs.google.com/forms/d/e/1FAIpQLSdISRIDDYbQXOhAWS13mwS8phTEnat90Cm3xyD19ItK_C4Kwg/viewform?usp=sf_link'])
SURVEY
@endcomponent

(2)

We've put together a package of photos related to your company from the fair. Feel free to download them using the link below.

@component('mail::button', ['url' => $photosUrl ])
Photos from the EBE2023 (.zip)
@endcomponent

(3)

We'll start selling the exhibition spaces on March 14th, 2023. We'll keep you updated about any further information and opportunities!

Thank you for your support and participation. We hope to see you again in 2024!

Best regards,

{{$footer}}

@endcomponent