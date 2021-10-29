

@component('mail::message')
 
# Hello {{ array_get($profile, "fname") }},

**In your exhibitor account you can now add "exhibitor representatives". Only defined representatives will have their badges printed .**

We deeply ask you to submit representatives possibly very soon - until end of the weeek! On Tuesday (12nd of OCT) we are starting to print our stuff.

@component('mail::button', ['url' => $accountUrl])
Sing In to Add
@endcomponent

Please remember that in our standard offering you get max 4 catering vouchers (number of representatives = number of vouchers but no more than 4 unless separately ordered via Exhbitor's Account Panel).

Regards, Pozdrawiam! 

Karolina Michalak

@endcomponent



