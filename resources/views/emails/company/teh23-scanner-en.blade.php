@component('mail::message')
 
# Hello {{ array_get($profile, "fname")  }},

## Scanning of Visitors' Badges

All contact information from guests visiting your stand can be easily collected using barcode scanning website (yes, no app is necessary!)

**All your representatives** can use our tool to collect data. After scanning data can be previewed and processed immediately in the Exhibitor's Panel.

@component('mail::button', ['url' => $accountUrlBadgescanner])
Step-by-step tutorial
@endcomponent


Regards, 

{{$footer}}

@endcomponent

