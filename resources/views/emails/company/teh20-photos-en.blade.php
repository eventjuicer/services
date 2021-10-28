

@component('mail::message')
 
# Hello {{ array_get($profile, "fname") }},

## We have collected photos of your team members and your exhibition space. Check it out!

@component('mail::button', ['url' => "https://promo.targiehandlu.pl/companies/" .$company_id . "/photos"])
Download photos
@endcomponent


Regards, 

Karolina Michalak

Adam Zygadlewicz

@endcomponent

