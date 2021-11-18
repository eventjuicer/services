

@component('mail::message')
 
# Hello {{ array_get($profile, "fname") }},

Today at **12:00pm CET** we will start sales of exhibition spaces for the upcoming 21st Ecommerce Warsaw Expo (APRIL edition)

This early bird sales pool is for exhibitors of the previous edition.

@component('mail::button', ['url' => "https://targiehandlu.pl/exhibit"])
BOOK HERE
@endcomponent

regards,

Karolina Michalak

Adam Zygadlewicz

@endcomponent



