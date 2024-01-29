@component('mail::message')
 
# Hello {{ array_get($profile, "fname")  }},

We’ve recently published personalized promo materials, a “request a meeting” function on your public profile, and we’re not done yet!

We have activated **two features** in the Matchmaking Tool on your exhibitor platform. It's time now for some teamwork to make sure you have the maximum possible meetings and thus get as many leads from the EXPO as possible.

## #1

**You can now look through the list of registered participants and send invites to get in touch with them before the EXPO** - this is another tool for our exhibitors to maximize the return on your participation.

By sharing your public profile and gaining points, you will be able to **schedule up to 200 meetings** with registered visitors of your choosing, as well as receive an unlimited number of incoming meeting requests from visitors. **In both cases, you will receive complete contact information.**

@component('mail::button', ['url' => $accountUrlVisitors])
Go to participants list
@endcomponent

## #2 

Furthermore, we have granted you ready-to-use VIP tickets on the platform, which you can now gift to your key customers or partners for free.

The VIP Zone is the place for comfortable, behind-the-scenes conversations between Speakers, Exhibitors and selected VIP Visitors.

**Every company representative has access to the VIP Zone - do not use VIP invitations for this purpose.**

@component('mail::button', ['url' => $accountUrlVips])
VIP invitations for Partners and Customers
@endcomponent

VIP invitations can be distributed in 2 ways:

* automatic dispatch from the platform (just enter the recipient's email address)

* copying an individual link from the Exhibitor's platform and sending via your own channels.

Our Account Managers are available to chat with you on your promotional activities and discuss how to get the most out of the resources we’ve provided.

Interested? Use the calendly link in the footer to schedule a call.

Best regards, 

{{$footer}}

@endcomponent