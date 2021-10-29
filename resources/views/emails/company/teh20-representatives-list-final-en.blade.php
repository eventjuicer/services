

@component('mail::message')
 
# Hello {{ array_get($profile, "fname") }},

**Please add exhibitor's representatives (team members that will represent your company at the expo booth) TODAY (end of the day)

Tomorrow we will let our stuff to be printed.

# The list of already defined representatives is as follows:

@forelse($representatives as $rep)

	{{$rep->translate("[[fname]] [[lname]] [[position]]")}}

@empty

	**Not yet defined!**

@endforelse


@component('mail::button', ['url' => $accountUrl])
Sing In to add or edit
@endcomponent

Please remember that in our standard offering you get max 4 catering vouchers (number of representatives = number of vouchers but no more than 4 unless separately ordered via Exhbitor Account Panel).

Regards, Pozdrawiam! 

Karolina Michalak

@endcomponent



