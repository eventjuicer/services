@component('mail::message')
 
# Hi {{ array_get($profile, "fname")  }},
  
@component('mail::panel')

## Today - May 18, 11:00 am
 
**Exclusive sale for the TOP30 companies** from the Exhibitor Contest. 

**You are one of the 30 eligibled companies! Book today via [ecommerceberlin.com/top30earlybird_t6d63sa9](https://ecommerceberlin.com/top30earlybird_t6d63sa9)**
 
You will be able to book the exhibition space through secret link provided above - **till the end of the day.** 

On the following day the sale will be open for everyone and we won’t be able to guarantee the best places at the lowest prices anymore.
 
@endcomponent

 
## What does the booking process look like?
 
Due to the interest exceeding the space limit, we implement a different sales model. 
 
Each subsequent pool is activated automatically after the limit of the previous pool is reached. It may happen that on the first day new, more expensive sales pools, will be activated if the previous pool will be already booked out.
 
Best regards, 
 
{{$footer}}
 
@endcomponent
