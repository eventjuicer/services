@component('mail::message')

# Hello  {{ array_get($profile, "fname") }},

**Here is your gentle reminder - in your exhibitor account you can add, change or delete your company representatives. Please note that only defined representatives will have printed badges.**

The number of company representatives entitled for registration depends on the type of your package:

9 sqm STANDARD exhibition space - 2 representatives

9 sqm HOT, SUPER HOT, ULTRA exhibition space - 4 representatives

18 sqm exhibition space - 6 representatives

# Deadline is 10th of February 2023. 

The list of already defined representatives is as follows:

@forelse($representatives as $rep)

	{{$rep->translate("[[fname]] [[lname]] [[position]]")}}

@empty

**Not yet defined!**

@endforelse

@component('mail::button', ['url' => $accountUrlReps])
Sing In to add or edit
@endcomponent

Each representative will receive a personalised badge, lanyard and a catering voucher in the Welcome pack, to be collected in the venue at the Exhibitor information desk.

Please be reminded that:

Each exhibitor package will come with a number of exhibitor badges and catering vouchers consistent with the number of registered representatives, specified in Exhibitor’s stand package.

**If you would like to add more representatives** you may purchase additional catering vouchers (25 EUR net/person) [in your exhibitor panel.]({{!$accountUrlVouchers!}})

Do you have any questions? Feel free to contact me.

Regards,

{{$footer}}

@endcomponent