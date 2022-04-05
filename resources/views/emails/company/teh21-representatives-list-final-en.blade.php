

@component('mail::message')
 
# Hello {{ array_get($profile, "fname") }},

**Please add exhibitor's representatives (team members that will represent your company at the expo booth) TODAY 12:00 (noon)**

At 12:01pm we are sending the materials to the printing house.

# The list of already defined representatives is as follows:

@forelse($representatives as $rep)

	{{$rep->translate("[[fname]] [[lname]] [[position]]")}}

@empty

	**Not yet defined!**

@endforelse


@component('mail::button', ['url' => $accountUrlReps])
Sing In to add or edit
@endcomponent

Please remember that in our standard offering you get max 4 catering vouchers (number of representatives = number of vouchers but no more than 4 unless separately ordered via Exhbitor Account Panel).

Regards, Pozdrawiam! 

{{$footer}}

@endcomponent



