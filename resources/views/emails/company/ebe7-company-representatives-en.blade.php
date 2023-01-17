

@component('mail::message')

# Hello {{ array_get($profile, "fname") }},

I hope you are doing well!

It is now time to register your company representatives for the E-commerce Berlin Expo. For this purpose, please add information about your team members (name, email address, phone number) in your exhibitor profile under “Company representatives”. 

@component('mail::button', ['url' => $accountUrlReps])
Sign Into My Account
@endcomponent

Please note that you can add as many participants as you are entitled to according to your exhibitor package - 4 representatives for 9sqm stands or 6 representatives for 18sqm ones. 

If you, as the company contact person, are planning to visit the Expo, please remember to register yourself as well. 

If you need any assistance, feel free to contact me.

Regards,

{{$footer}}

@endcomponent
