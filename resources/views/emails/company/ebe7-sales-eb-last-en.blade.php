

@component('mail::message')
 
# Hi {{ array_get($profile, "fname")  }},
 

## TODAY (Thursday - May 19) 11:00 am
 
**Open sale for everyone, including your company**.

Booking possible via [ecommerceberlin.com/exhibit](https://ecommerceberlin.com/exhibit)

Some exhibition spaces have been already reserved by companies from TOP30 of the Exhibitor's Contest .



## What does the booking process look like?
 
Due to the interest exceeding the space limit, we implement a different sales model. 
 
Each subsequent pool is activated automatically after the limit of the previous pool is reached. 
 


Best regards, 
 
{{$footer}}
 
@endcomponent
