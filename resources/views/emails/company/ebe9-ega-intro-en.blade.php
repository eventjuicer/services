@component('mail::message')

# Hello {{ array_get($profile, "fname") }},

We’re excited to announce that the **8th edition of the E-commerce Germany Awards** is just around the corner, and you’re the first to know! Submissions officially open on December 2nd, but as a valued exhibitor, you can submit your product or service sooner than others.

The Awards recognize the top service providers in e-commerce, offering a platform to showcase solutions and celebrate technologies that empower online retailers and brands.

Take advantage of this opportunity to promote your product for free! Winners enjoy exposure on news portals, social media, and during the prestigious **Awards Ceremony** at our **Networking Event**. Submitting your entry is complimentary for exhibitors, but don’t wait — the deadline is **December 20th, 2024!**

@component('mail::button', ['url' => "https://ecommercegermanyawards.com"])
Submit your company
@endcomponent

The contest finals will culminate in the Prize-Giving Ceremony and Networking Party on **February 19th, 2025**, held between the two Expo days. This is your chance to celebrate success, connect with current and potential clients in a relaxed atmosphere, and, with a bit of luck, take home the award!

Why come alone? Right now, you can take advantage of a limited-time special offer on tickets. Normally priced at 129 EUR each, **from November 26th to December 2nd**, you can get:

- 2 tickets for only 200 EUR
- 3 tickets for just 270 EUR

This exclusive deal ends December 2nd, so invite colleagues to join you and make the most of this unique evening. Celebrate, connect, and grow your network!

@component('mail::button', ['url' => $accountUrlVouchers])
Secure your tickets now!
@endcomponent

If you have any questions, feel free to reach out to me!

Best Regards,

{{$footer}}

@endcomponent