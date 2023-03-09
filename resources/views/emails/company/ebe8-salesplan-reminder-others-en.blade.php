@component('mail::message')
 
# Hi {{ array_get($profile, "fname") }},

We just wanted to remind you E-commerce Berlin Expo 2024 sales schedule.

Since you were one of our exhibitors in this edition, You will have access to the Early Bird sales round for the 2024 event!

@component('mail::button', ['url' => 'https://ecommerceberlin.com/exhibit'])
CHECK THE PRICES
@endcomponent

**If you want to book more than 3 spaces**, reply to this email with your desired booth number selected from the map by Monday, March 13th EOD. (Some booths have already been reserved.)

**If you are not interested in the wholesale offer**, booking for you will start on **Wednesday, March 15th at 11 am.**

Let us know if you have any questions.

Cheers.

{{$footer}}
 
@endcomponent