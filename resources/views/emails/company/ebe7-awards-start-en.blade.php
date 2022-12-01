

@component('mail::message')

# Hello {{ array_get($profile, "fname") }},

We’re excited to announce that the **6th edition of the E-commerce Germany Awards is already live!** You can submit your company for this prestigious contest and be awarded by a selected panel of industry leaders and experts. 

The E-commerce Germany Awards are a fantastic platform to recognize the excellence, creativity, and achievements of e-commerce companies on the German market.

Participation in E-commerce Germany Awards is a great opportunity to gain additional visibility in the industry, develop brand awareness among potential clients and competitors, motivate your teams and make your organization the destination for top talents!

Could it get any more tempting? **As an Exhibitor of the Expo, you can take part in the contest completely free of charge and increase your visibility in the e-commerce industry!**

To start submitting your company, just follow the link by pressing the button below.

@component('mail::button', ['url' => "https://ecommercegermanyawards.com"])
Submit your company
@endcomponent

**The deadline for submitting the entries is January 6th, 2023.**

If you have any questions, feel free to reach out to me!

Best Regards,

{{$footer}}

@endcomponent