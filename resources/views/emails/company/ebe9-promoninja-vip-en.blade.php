@component('mail::message')

Hello {{ array_get($profile, "fname") }},
We’ve recently published personalized promo materials and activated exciting new features on your exhibitor platform to help you make the most of your Expo experience!

##1 

First of all, we have granted you ready-to-use VIP tickets on the platform, which you can now gift to your key customers or partners for free.

The VIP Zone is the place for comfortable, behind-the-scenes conversations between Speakers, Exhibitors and selected VIP Visitors.

Every company representative has access to the VIP Zone – do not use VIP invitations for this purpose.

@component('mail::button', ['url' => $accountUrlVips]) VIP invitations for Partners and Customers @endcomponent

VIP invitations can be distributed in 2 ways:

* automatic dispatch from the platform (just enter the recipient's email address)
* copying an individual link from the Exhibitor's platform and sending it via your own channels.

##2 

We’ve also made personalized promo materials available for you, which can help boost your visibility and outreach. These materials are tailored to your profile and the event, and are designed to help you engage potential clients and partners.

Feel free to use them in your marketing efforts and share them with your audience. The more you promote, the greater the chance of getting in touch with the right people!

@component('mail::button', ['url' => $accountUrlPromote])
Promo materials page for your company
@endcomponent

**Your promo materials page URL can be send to PR team**. Just copy the URL from the browser address bar - after you sign into your panel using the link above - and send it to your colleagues.


In case of any questions, please don’t hesitate to contact us.

Best regards,
{{$footer}}

@endcomponent