@component('mail::message')
 
# Hi {{ array_get($profile, "fname") }},

We just wanted to remind you the E-commerce Berlin Expo 2024 sales schedule.

Since you are one of our TOP30 contest winners, BOOKING MAP is available for you under a secret URL given below. (Please do not share it)

@component('mail::button', ['url' => 'https://ecommerceberlin.com/top30earlybird_t63sUa9'])
CHECK THE PRICES
@endcomponent

**If you want to book more than 3 spaces**, reply to this email with your desired booth number selected from the map by Monday, March 13th EOD. (Some booths have already been reserved.)

**If you are not interested in the wholesale offer**, booking for you will start on **Tuesday, March 14th at 11 am.** (You have exclusive access to our lowest prices for the 2024 sales round.)

Let us know if you have any questions.

Cheers.

{{$footer}}
 
@endcomponent
