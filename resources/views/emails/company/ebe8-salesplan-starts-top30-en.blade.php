@component('mail::message')
 
# Hi {{ array_get($profile, "fname") }},

@component('mail::panel')

# Today - March 14, 11:00 am

Attention TOP30 companies from the Exhibitor Contest: Exclusive sale!

**You are among the 30 eligible companies to take advantage of this offer.** Don't miss out and book your exhibition space today through this [ecommerceberlin.com/top30earlybird_t63sUa9](https://ecommerceberlin.com/top30earlybird_t63sUa9) **till the end of the day.**

After today, the sale will be open to everyone, and we cannot guarantee the best places at the lowest prices anymore.

@endcomponent

## What is the booking process?

Each subsequent pool will be activated automatically after the previous pool reaches its limit.  Therefore, on the first day, new and more expensive sales pool may be activated if the previous pool has already been booked out.

Best regards,

{{$footer}}

@endcomponent