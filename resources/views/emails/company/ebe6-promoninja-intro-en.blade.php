

@component('mail::message')

# Hello {{ array_get($profile, "fname") }},

We’re in the final stretch before the E-commerce Berlin Expo. It’s the high time to introduce you to the newest challenge, available exclusively for our exhibitors.

## What’s the idea behind it? 

We believe that a successful event is not only about getting to know new customers, but also strengthening relationships with existing clients. And what could be a better opportunity for it than meeting them at the Expo? 

## How does that work?

In this competition you can win points by sharing a link which promotes your participation in the Expo and invites your clients to join the Event. Every user’s click equals one point - simple as that! The trick is, you have to share your customised link to receive the points.
 
You can find your customised link in your Exhibitor’s profile in the **Promo materials** section. 

@component('mail::button', ['url' => $accountUrl])
Sign Into My Account
@endcomponent

Feel free to use the link in email footers, advertisements (FB ads, adwords, social media) or when directly informing your clients. It can be also copied to clipboard and sent via messenger, email or in your newsletters. 

## How do I share the link?

The link posted on social media can give different visual results:

* the default graphic we designed (appears automatically, no action needed on your side),

* your customised design (active only if you provide the full URL to your graphic in the **Company data** section of your exhibitor’s profile).

You can preview the graphic in tools such as Facebook Debugger or LinkedIn Post Inspector. If the updated graphic isn’t immediately visible, please clear your cache and try again.
 
Furthermore, in the **Newsletter templates** section we prepared two ready-to-send newsletters (English and German), which are designed to inform your clients and partners about your participation in the Event. You can copy HTML or download a ZIP file that can be easily imported by Newsletter2go or Mailchimp-like software.

## What is there to win?

In your Exhibitor's profile you can see the full list of available prizes in the **Rewards** section, such as:

* Presentation slot on one of our stages during the Expo, 

* Video interview,

* Logo highlight on the EBE website,

* And many more!
 
Each of the prizes requires fulfilment of the described conditions for its granting:

* minimal number of points (= pageviews of your public exhibitor's profile through the customised link),

* position in the exhibitors ranking.
 
**The prizes do not exclude each other** - you can be entitled to several prizes simultaneously.

## Where am I in the Ranking?

In the **Rewards** section of your exhibitors profile you can find the reference link to the ranking where you can check your current position in the contest. 

The ranking is created on the basis of data fetched from our analytics tool. Please note that it takes a while for the points to be visible there - when you check the results early in the morning, you may see the results from the previous day.

## Any questions?

Let me know, I'll be happy to help! The best way would be to schedule a call with me so we can go through all your questions.

**The Exhibitor Contest ends on April 22, 2022, 11:59 PM CET.**

Best of luck!

{{$footer}}

@endcomponent

