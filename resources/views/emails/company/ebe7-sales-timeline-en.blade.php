

@component('mail::message')
 
# Hi {{ array_get($profile, "fname")  }},
 
Below you can find the schedule of the sales process for the upcoming edition of the E-commerce Berlin Expo (February 23, 2023).
 
## Wednesday - May 18, 11:00 am
 
Exclusive sale for the TOP30 companies from the Exhibitor Contest. 

If your company is interested in booking 3 or more exhibition spaces, please let us know.

@component('mail::panel')

## Thursday - May 19, 11:00 am
 
**Open sale for everyone, including your company** - the floor plan with prices is available on: [ecommerceberlin.com/exhibit](https://ecommerceberlin.com/exhibit)

@endcomponent

## What does the booking process look like?
 
Due to the interest exceeding the space limit, we implement a different sales model. 
 
Each subsequent pool is activated automatically after the limit of the previous pool is reached. It may happen that on the first day new, more expensive sales pools, will be activated if the previous pool will be already booked out.
 
Best regards, 
 
{{$footer}}
 
@endcomponent
