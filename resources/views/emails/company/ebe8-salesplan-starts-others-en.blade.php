@component('mail::message')
 
# Hi {{ array_get($profile, "fname")  }},

@component('mail::panel')
 
## Today (Wednesday, March 15th) 11:00 am CET
 
**Exhibitors only sale, including your company**.

Booking possible via [ecommerceberlin.com/exhibit](https://ecommerceberlin.com/exhibit)

Some exhibition spaces have been already reserved by companies from TOP30 of the Exhibitor's Contest.

@endcomponent

## What is the booking process?

Each subsequent pool is activated automatically after the limit of the previous pool is reached. 
 
Best regards, 

{{$footer}}

@endcomponent