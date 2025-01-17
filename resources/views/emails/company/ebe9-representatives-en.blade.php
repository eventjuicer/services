@component('mail::message')

# Hello {{ array_get($profile, "fname") }},

I hope you are doing well!

It is now time to register your company representatives for the E-commerce Berlin Expo. For this purpose, please add information about your team members on the exhibitor platform in the section “Company representatives”. 

@component('mail::button', ['url' => $accountUrlReps])
Sign Into My Account
@endcomponent

**Please note:** you can register as many as 4 delegates, unless agreed otherwise, or you have ordered additional tickets on the exhibitor platform. 

If you plan to have more than 4 representatives at your booth at the same time, please order an additional ticket for each representative via the exhibitor platform. Each additional ticket includes 2 catering vouchers, one for each day of the event. If you register a representative without purchasing an additional ticket on the platform, they will receive an official badge but will not be entitled to the lunch vouchers.

The deadline for registering delegates is **February, 5th**. Those registered after this date have no guarantee that their badges will be printed; therefore, we kindly ask, in case of any changes after the deadline, to provide the necessary information via email.

Keep in mind that if you personally intend to take part in the exhibition as a delegate, you also need to register in the company's representatives section. 

If you need any assistance, feel free to contact me.

Regards,

{{$footer}}

@endcomponent