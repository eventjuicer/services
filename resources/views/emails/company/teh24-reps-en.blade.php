

@component('mail::message')
 
# Hello {{ array_get($profile, "fname") }},

**Please add exhibitor's representatives (team members that will represent your company at the expo booth) in Exhibitor's Panel**

@component('mail::button', ['url' => $accountUrlReps])
Sing In to add or edit
@endcomponent

Please remember that in our standard offering you get max 4 catering vouchers (number of representatives = number of vouchers but no more than 4 unless separately ordered via Exhbitor Account Panel).

Regards, Pozdrawiam! 

{{$footer}}

@endcomponent



