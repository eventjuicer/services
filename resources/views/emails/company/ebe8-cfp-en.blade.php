@component('mail::message')
 
# Hello {{ array_get($profile, "fname")  }},

We're excited to share a fantastic opportunity with you: **The E-commerce Berlin Expo - Call for Papers contest, an integral part of our annual event, is now open!**

The Call for Papers competition is an opportunity for industry professionals like you to submit your ideas for presentations or speeches related to various aspects of e-commerce. If selected, you gain the opportunity to **present your ideas live on stage at the Expo**, sharing your expertise, insights, and experiences with the audience. 

We're on the lookout for practical insights – your **success stories, strategies, and real-world solutions** are exactly what we're after. We're eager to learn from your experiences, so please **avoid sales pitches**. Showcase your expertise in:

- FinTech 
- Marketing in E-commerce 
- Analytics and Conversion 
- Crossborder and International Expansion 
- Logistics Software 
- Platforms or
- FutureTech and Innovations.

To get started, click the button below.

@component('mail::button', ['url' => "https://ecommerceberlin.com/speaking?utm_source=email&utm_medium=email&utm_campaign=system_mailing_exhibitors"])
Submit your presentation proposal
@endcomponent

The submission deadline for proposals is **September 29.**

Best of luck!

{{$footer}}

@endcomponent