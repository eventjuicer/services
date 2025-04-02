@component('mail::message')
 
# Hello {{ array_get($profile, "fname")  }},

Each exhibitor representative present at tomorrow’s E-commerce Warsaw Expo ("Targi eHandlu") can use their smartphone to scan visitor badges.

Scanning is done using the smartphone’s camera function; the QR code on the visitor badge opens a link within the ECWE event app.

On the first scan, logging in is necessary – use the address {{$email}}. After receiving the login link via email, copy and paste it into the browser’s address bar that was opened after scanning the badge.

Subsequent scans will be faster :)

The collected contact data can be downloaded via the Contacts tab or on the event app’s main page.

You can practice the process by scanning the QR code located on the Organizer’s ticket – https://ecwe.pl/api/tickets/pkdyrv

{{$footer}}

@endcomponent

