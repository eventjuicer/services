

@component('mail::message')

# Hello {{ array_get($profile, "fname") }},

It’s been a while since the last Expo, wasn’t it? We’re here to help you take most of your participation in the upcoming edition of the E-commerce Berlin Expo!

Below you can find the link to our article where we summarized the most important tips for our exhibitors. This should help you get ready for the Event!

@component('mail::button', ['url' => '['https://ecommercegermany.com/blog/how-to-prepare-yourself-for-the-expo?utm_source=exhibitors&utm_medium=system-mail&utm_campaign=best_practicies']'])
CHECK OUT THE BEST TIPS!
@endcomponent

If there is anything you’d like to discuss with us regarding the Expo, we’ll be happy to arrange a call and go through all the questions you may have. To do so, please book the meeting with your Account Manager in his/her calendar:

DOMINIK: [CALENDLY](https://calendly.com/dominik-ebe)
GEROME: [CALENDLY](https://calendly.com/gerome-ebe)
MARTA: [CALENDLY](https://calendly.com/marta-ebe)

We’ll be happy to assist you and we’re already looking forward to welcoming you to Berlin very soon!

Best regards,

{{$footer}}

@endcomponent



