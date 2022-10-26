@component('mail::message')
 
# Hello {{ array_get($profile, "fname")  }},

It is probably the last e-mail message before we meet at the Expo!

## Scanning of Visitor Badges

All contact information from guests visiting your stand can be collected using barcode scanning website.

All your representatives can use above website to collect data. Data can be previewed and processed immediately in the Exhibitor's Panel.

@component('mail::button', ['url' => $accountUrlBadgescanner])
Step-by-step tutorial
@endcomponent


Regards, 

{{$footer}}

@endcomponent

