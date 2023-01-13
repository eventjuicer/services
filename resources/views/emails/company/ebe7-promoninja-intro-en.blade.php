@component('mail::message')
 
Hello {{ array_get($profile, "fname") }},

We’re in the final stretch before the E-commerce Berlin Expo. All hands on deck, because we have prepared an exclusive exhibitor contest for you. There are amazing prizes on offer, including: a **video interview, early-bird sales access for EBE2024 booths and more!**

**To participate the competition, you’ll need to promote your public exhibitor's profile.** When directing your clients, partners and internet audience to your public profile - you promote your participation in the Expo and collect points and move up the ranking! 

**You can find ready-to-use, customized, promotional materials under the link below. All promo materials are linked to your exhibitor's profile.**

@component('mail::button', ['url' => $accountUrlPromote])
Promo materials page for your company
@endcomponent

**Your promo materials page URL can be send to PR team**. Just copy the URL from the browser address bar - after you sign into your panel using the link above - and send it to your colleagues.

Your exhibitor’s public profile has multi functions. Visitors can:

**arrange a meeting with you by the booth** (NEWLY ADDED)

discover more about your company and see what you have to offer

check your booth location at the EXPO

Do you want to check your position in the contest or find out more about different prizes? Simply navigate to the Promotion –> Ranking section. 

The best part is that winning one prize doesn’t exclude others – you are eligible to receive multiple prizes simultaneously!

**The Exhibitor Contest ends on February 20, 2023, 11:59 PM CET.**

If you have any questions, let me know and I’d be happy to help. Good luck! 

Best regards, 

{{$footer}}

@endcomponent