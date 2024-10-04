@component('mail::message')
 
# Hi {{ array_get($profile, "fname")  }},

@component('mail::panel')
 
**Closed Early Bird Sales will begin at 11:00 AM.** Book your exhibition space for the 2-day E-commerce Berlin Expo 2025.
 
Expo Date: February 19 & 20th, 2025, Station-Berlin.

**Booking possible via [ecommerceberlin.com/exhibit](https://ecommerceberlin.com/exhibit)**

@endcomponent

Please be aware that reservations for two booths in the same pricing range (e.g., two HOT booths and two ULTRA booths) cannot be made simultaneously by our system. If you would like to reserve booths in this format, please make separate bookings.

On the day of the expo, booths from the pre-sale inventory are indicated with gray-highlighted unavailable slots.

Best regards, 

{{$footer}}

@endcomponent