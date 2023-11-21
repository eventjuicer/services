@component('mail::message')

# Hello {{ array_get($profile, "fname") }},

We're excited to announce that the **7th edition of the E-commerce Germany Awards is now open for submissions!** The contest is a fantastic platform to recognize the excellence, creativity, and accomplishments of the companies providing services in the German e-commerce market.

Participation in the E-commerce Germany Awards is also a great opportunity to increase your visibility in the industry, enhance brand awareness among potential clients and competitors, motivate your teams, and make your organization the destination for top talents.

Could it get any more tempting? **As an Exhibitor of the Expo you can submit your proposal in the contest free of charge!**

To start the process of submitting your company, just follow the link by clicking the button below.

@component('mail::button', ['url' => "https://ecommercegermanyawards.com"])
Submit your company
@endcomponent

**The deadline for submitting the entries is December 15th, 2023.**

If you have any questions, feel free to reach out to me!

Best Regards,

{{$footer}}

@endcomponent