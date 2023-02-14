@component('mail::message')
 
# Hello {{ array_get($profile, "fname")  }},

A VIP invitations feature is waiting for you on the Exhibitor's platform.

## Invite your VIPs to the exclusive VIP Zone at the Fair. 

The VIP Zone is the place for comfortable, behind-the-scenes conversations between Speakers, Exhibitors and selected VIP Visitors.

**Every company representative has access to the VIP Zone - do not use VIP invitations for this purpose.**

@component('mail::button', ['url' => $accountUrlVips])
VIP invitations for Partners and Customers
@endcomponent

VIP invitations can be distributed in 2 ways:

* automatic dispatch from the platform (just enter the recipient's email address)

* copying an individual link from the Exhibitor's platform and sending via your own channels.

You get 10 invitations to start. By promoting your public company profile ("promo materials"), you can easily get up to 20 invitations.

Regards, 

{{$footer}}

@endcomponent

