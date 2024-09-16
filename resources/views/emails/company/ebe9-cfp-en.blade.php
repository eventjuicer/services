@component('mail::message')

Dear {{ array_get($profile, "fname") }},

We would like to remind you that the Speaker Contest for the E-commerce Berlin Expo is open until Friday, **September 27th**.

As an exhibitor, this is an opportunity to extend your presence beyond your booth by presenting on one of our five conference stages.

**Why participate?**

- Increase booth visibility: Speaking on stage can help direct more attendees to your booth.
- Establish expertise: Presenting at the Expo positions you as a leader in your field.
- Free entry: There are no additional costs to participate in the contest.

**What’s new?**

- We’re offering **4 times more** speaking opportunities than last year, with 29 slots available to win.
- The selection process has been updated, allowing winners to be chosen even **without public voting**.
- Contest categories have been refreshed.

Ready to join? Submit your proposal until Friday – it only takes 5 minutes:

@component('mail::button', ['url' => "https://ecommerceberlin.com/speaking?utm_source=email&utm_medium=email&utm_campaign=system_mailing_exhibitors"])
Submit your presentation proposal
@endcomponent

If you have any questions, feel free to reach out. We look forward to your application.

Best regards,

{{ $footer }}

@endcomponent
