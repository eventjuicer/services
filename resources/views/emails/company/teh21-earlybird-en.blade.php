

@component('mail::message')
 
# Hello {{ array_get($profile, "fname") }},

**On Thursday (November, the 18th)** at **12:00pm CET** we will start sales of exhibition spaces for the upcoming 21st Ecommerce Warsaw Expo.

This early bird sales pool is for exhibitors of the previous edition.

@component('mail::button', ['url' => "https://targiehandlu.pl/exhibit"])
Secret page for Early bird booking
@endcomponent

(We reserve the right to minor changes of prices and booth categories.)

regards,

Karolina Michalak

Adam Zygadlewicz

@endcomponent



