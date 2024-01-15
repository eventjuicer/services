@component('mail::message')

# Hello {{ array_get($profile, "fname") }},

I hope you are doing well!

It is now time to register your company representatives for the E-commerce Berlin Expo. For this purpose, please add information about your team members (name, email address, phone number) in your exhibitor profile under “Company representatives”. 

@component('mail::button', ['url' => $accountUrlReps])
Sign Into My Account
@endcomponent

**Please note:** you can register as many as 4 delegates, unless otherwise agreed with our salesman, or you have ordered additional tickets in advance. 

If you would like to register more representatives, you will need to purchase additional vouchers via the exhibitor platform.

Deadline for registering delegates is **February, 9th**. Those registered after this date have no guarantee that their badges will be printed. 

Keep in mind that if you personally also intend to take part in the exhibition as a delegate, you also need to register in the company's representatives section. 

If you need any assistance, feel free to contact me.

Regards,

{{$footer}}

@endcomponent