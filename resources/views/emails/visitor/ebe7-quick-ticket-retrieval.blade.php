@component('mail::message')

Hello {{ $p->translate("[[fname]]") }},

Thank you for downloading the ticket for E-ecommerce Berlin Expo.

We hope to see you tomorrow at 10:00am at STATION Berlin.

If you are unable to print or accidentally have lost your printed ticket, please show the code presented below at the registration point.

# {{$hash}}

@endcomponent