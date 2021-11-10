@component('mail::message')

# Hello {{ array_get($profile, "fname") }},

We are rolling out the sales of the exhibition spaces for the upcoming 21. Ecommerce Warsaw Expo on the 18th of November (it's a Thursday)

**Next edition of our trade fair is scheduled for April, the 14th 2022**

@component('mail::button', ['url' => "https://res.cloudinary.com/eventjuicer/image/upload/v1636543915/teh21_hall_layout1.png"])
Checkout the initial floor plan
@endcomponent

Final details (floor plan, pricing) will be revealed at the beginning of next week.

Regards,

Karolina Michalak

Adam Zygadlewicz

@endcomponent