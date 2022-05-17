

@component('mail::message')
 
# Hi {{ array_get($profile, "fname")  }},
 
Below you can find the schedule of the sales process for the upcoming edition of the E-commerce Berlin Expo (February 23, 2023).
 
## Wednesday - May 18, 11:00 am
 
**Exclusive sale for the TOP30 companies** from the Exhibitor Contest. (If you are one of the lucky ones, you’ll receive a special link 2 hours before the sales starts.)
 
You will be able to book the exhibition space through a special link till the end of the day. On the following day the sale will be open for everyone and we won’t be able to guarantee the best places at the lowest prices anymore.
 
If your company is interested in booking 3 or more exhibition spaces, please let us know.
 
## Thursday - May 19, 11:00 am
 
Open sale for everyone - the floor plan with prices with be available from Thursday on: https://ecommerceberlin.com/
 
## What does the booking process look like?
 
Due to the interest exceeding the space limit, we implement a different sales model. 
 
Each subsequent pool is activated automatically after the limit of the previous pool is reached. It may happen that on the first day new, more expensive sales pools, will be activated if the previous pool will be already booked out.
 
Best regards, 
 
{{$footer}}
 
@endcomponent
