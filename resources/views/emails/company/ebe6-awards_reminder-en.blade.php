

@component('mail::message')

# Hello {{ array_get($profile, "fname") }},

We’re excited to announce that the **5th edition of the E-commerce Germany Awards is already live!** You can submit your company for this prestigious contest and be awarded by a selected panel of industry leaders and experts. 

The E-commerce Germany Awards are a fantastic platform to recognize the excellence, creativity, and achievements of e-commerce companies on the German market.

Even getting on our shortlist of attendees could help you grow your brand awareness and promote your business to new clients. By entering you can also provide clarity on your objectives and ambitions while crucially comparing yourselves with competitors.

Could it get any more tempting? **As an Exhibitor of the Expo, you can take part in the contest completely free of charge and increase your visibility in the e-commerce industry!**

To start submitting your company, just follow the link by pressing the button below.

@component('mail::button', ['url' => "https://ecommercegermanyawards.com/"])
Submit your company
@endcomponent

**The deadline for submitting the entries is November 26, 2021.**

If you have any questions, feel free to reach out to me!

Best Regards,

{{$footer}}

@endcomponent