

@component('mail::message')
 
# Hello {{ array_get($profile, "fname") }},

The DEADLINE for adding Exhibitor's representatives who will represent the company at the Stand is approaching.

**This is the last moment to add/change. On Friday we send badges for printing.**

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



