

@component('mail::message')

# Hello {{ array_get($profile, "fname") }},

We’re working hard on making everything ready for the E-commerce Berlin Expo 2022, and probably so are you!

To make your work on your stand smoother, there’s a small summary for you:

You can still order the booth arrangement with us (in your Exhibitor’s Profile) or you’re more than welcome to arrange it yourself. In such case, please do not forget to follow our Terms and Conditions for Stand Construction and Arrangement:

@component('mail::button', ['url' => 'https://res.cloudinary.com/ecommerceberlin/image/upload/v1643909265/Logistics/Exhibitor%E2%80%99s%20Manual/EBE_2022_-_Stand_construction_terms_and_regulations_ENG.pdf'])
Terms and Conditions
@endcomponent

In our Exhibitor’s Manual we’ve gathered all the most important information that should help you with your preparation for the Event. Please check it out and let us know if something isn’t clear:

@component('mail::button', ['url' => 'https://res.cloudinary.com/ecommerceberlin/image/upload/v1643909432/Logistics/Exhibitor%E2%80%99s%20Manual/EBE_2022_-_Exhibitor_s_Manual_ENG.pdf'])
Exhibitor’s Manual
@endcomponent

If you have any questions regarding your stand preparation, please get back to me and I’ll be happy to assist you.

Regards,

{{$footer}}

@endcomponent



