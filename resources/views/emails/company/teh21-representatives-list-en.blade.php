

@component('mail::message')
 
# Hello {{ array_get($profile, "fname") }},

**In your exhibitor account you can now add "exhibitor representatives". Only defined representatives will have their badges printed .**

@component('mail::button', ['url' => $accountUrlReps])
Sing In to Add
@endcomponent

Please remember that in our standard offering you get max 4 catering vouchers (number of representatives = number of vouchers but no more than 4 unless separately ordered via Exhbitor's Account Panel).

Regards, Pozdrawiam! 

{{$footer}}

@endcomponent



