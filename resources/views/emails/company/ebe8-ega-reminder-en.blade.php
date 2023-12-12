@component('mail::message')

# Hello {{ array_get($profile, "fname") }},

We hope this email finds you well!

Just a friendly reminder that the submission window for the 7th edition of the E-commerce Germany Awards is still open, and we don't want you to miss out!

What is the E-Commerce Germany Awards (E-GA)?

E-GA is a once-a-year contest recognising the achievements of B2B service providers in E-Commerce.
**Why should you participate?**
- Increase Visibility: Expose your brand to a wide audience.
- Build Brand Awareness: Strengthen your presence in the eyes of customers and competitors.
- Motivate Your Team: Boost team spirit by highlighting your company's achievements.
- Attract Top Talent: Become a magnet for professionals in your industry.

And now is the best part: As an Exhibitor at the Expo, submitting your company in the contest is absolutely **FREE!** Click the button below to submit:

@component('mail::button', ['url' => "https://ecommercegermanyawards.com?utm_source=email&utm_medium=email&utm_campaign=exhibitors_system_ega"])
Submit your company
@endcomponent

Don't let this opportunity slip away. Join us in celebrating excellence in the German e-commerce market!

**The deadline for submitting the entries is December 15th, 2023.**

If you have any questions, feel free to reach out to me!

Best Regards,

{{$footer}}

@endcomponent