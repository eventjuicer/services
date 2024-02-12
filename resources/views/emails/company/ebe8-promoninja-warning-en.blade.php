@component('mail::message')

Hi {{ array_get($profile, "fname")  }}, 

Maximizing the return of your investment at the fair depends not only on the location or attractiveness of the stand! :) It’s crucial to generate interest and drive traffic to your booth by creating a buzz around your participation in the event.

**Utilize the tools we provide to showcase your services to the audience**. Check out what we have to offer:

@component('mail::panel')

**VIP invitations** (invite your key partners and prospects to attend the Expo and treat them with the access to the exclusive VIP Zone with sofas and refreshments)

@component('mail::button', ['url' => $accountUrlVips])
Send VIP invitations to partners and customers
@endcomponent

**Exhibitor’s Profile** (promote your Exhibitor’s Profile on your social media channels to showcase your booth location on the map and **receive unlimited meeting invitation requests**)

**Registered attendees list access** (browse the list of current registered visitors and **send meeting invitations** to schedule appointments)

@endcomponent

** All these features are available in the Exhibitor’s Panel and are waiting for you to use!**

A short update: 

TOP 5 (11:00 AM CET) companies actively promoting their presence at the Expo and using our tools (rewarded with additional services!) are:

* VINSINFO

* Scandiweb

* foxintelligence

* ACTION S.A.

* Expandeco

**We are so happy that you understand the importance of lead generation and that you use our tools to maximize your exposure at the event!**

@component('mail::button', ['url' => $accountUrlPromote])
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