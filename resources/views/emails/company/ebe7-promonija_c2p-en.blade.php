@component('mail::message')

# Hello {{ array_get($profile, "fname") }},

We’ve recently published personalized promo materials, a “request a meeting” function on your public profile, and we’re not done yet! 

**You can now look through the list of registered Expo guests and send invites to get in touch with them before the Event** - this is another tool for our exhibitor to maximize the return on your Expo participation.

By promoting your public profile and gaining points, you will be able to **schedule up to 200 meetings** with registered visitors of your choosing, as well as receive an **unlimited number of incoming meeting requests from visitors**. In both cases, you will receive complete contact information.

**Our Account Managers are available to chat with you** on your promotional activities and discuss how to get the most out of the resources we’ve provided.

Interested? Use the calendly link in the footer to schedule a call. 

@component('mail::button', ['url' => $accountUrlVisitors])
List of registered visitors
@endcomponent


@component('mail::panel')

Your personalized promotional materials.

**Please send below link to you PR team.**

{!! $accountUrlPromotePublic !!}

@endcomponent




Best of luck!

{{$footer}}

@endcomponent