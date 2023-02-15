@component('mail::message')

Hi {{ array_get($profile, "fname")  }}, 

## With just 7 days remaining until the contest deadline, it's crucial to make the most of this opportunity. 

@component('mail::panel')

To maximize your chances of success, we strongly encourage you to start sending VIP Invitations to your important partners and potential clients to attend the Expo and give them access to the exclusive VIP Zone with comfortable seating and refreshments. 

@component('mail::button', ['url' => $accountUrlVips])
Send VIP invitations to partners and customers
@endcomponent

@endcomponent

In the meantime, **make sure to not forget about your RSVP’s and pending visitors' invitations** otherwise, you might miss on some leads!


# Exhibitor’s Profile

@component('mail::panel')
promote your Exhibitor’s Profile on your social media channels to showcase your booth location on the map and **receive unlimited meeting invitation requests**)
@endcomponent

TOP 5 (2:20pm CET) companies actively promoting their presence at the Expo and using our tools (rewarded with additional services!) are:

* Foxintelligence

* BigBuy

* iteo S.A.

* Allegro Sp. z o.o.

* Outvio OÜ

**We are so happy that you understand the importance of lead generation and that you use our tools to maximize your exposure at the event!**

@component('mail::button', ['url' => $accountUrlPromotePublic])
See promotional materials and ranking page
@endcomponent

@component('mail::panel')

How to promote your presence at our event "the simplest way"? 

**Share the following link with your PR & social media department or external agency** (when using this link other exhibitor's panel features will be blocked.).

{!! $accountUrlPromotePublic !!}

@endcomponent

Cheers

{{$footer}}

@endcomponent