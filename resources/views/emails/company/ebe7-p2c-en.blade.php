@component('mail::message')

# Hi {{ array_get($profile, "fname") }},

[On your public Exhibitor profile]({!! $trackingLink !!}) a new feature "REQUEST A MEETING" has been launched.

Visitors can be the initiator of a meeting with your company to establish communication with you even before the trade fair day.

## How does this work?

When you promote your participation in the EXPO (a gentle reminder: you can use promotional materials provided by us) and you send the link to your Exhibitor’s public profile to the visitors - they can arrange a meeting with you by clicking “REQUEST A MEETING”

All invitations from Visitors land in the RSVPs tab on the Exhibitor Platform (we will also notify you of pending invitations).

By confirming an appointment you get instant access to the visitor’s contact details.

How do I promote my Exhibitor profile and appointment function?

Use [a section with ready-made materials for your company]({!! $accountUrlPromote !!}) or promote yourself as you wish using your URL - {!! $trackingLink !!}

Please note that the promotional material section of the website is public. You can copy the address [URL to this page]({!! $accountUrlPromote !!}) from the address bar of your browser and send it to the person responsible for your company's advertising activities.

Regards,

{{$footer}}

@endcomponent