

@component('mail::message')
 
# Hello {{ array_get($profile, "fname") }},

**On Thursday (November, the 18th)** at **10:00am CET** we will start sales of exhibition spaces for the upcoming 21st Ecommerce Warsaw Expo.

This early bird sales pool is for TOP30 competition winners and will be possible only via link provided below.

@component('mail::button', ['url' => "https://targiehandlu.pl/top30erlbrd2k04thc"])
Secret page for Early bird booking
@endcomponent

(We reserve the right to minor changes of prices and booth categories.)

regards,

Karolina Michalak

Adam Zygadlewicz

@endcomponent



