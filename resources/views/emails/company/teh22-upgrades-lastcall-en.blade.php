@component('mail::message')
 
# Hello {{ array_get($profile, "fname") }},

Let us remind you about dditional services you may order via Panel. Check available options in the Exhibitor's panel.**

@component('mail::panel')

Please order additional services before upcoming Monday.

Due to our commitment to provi

@endcomponent


## Premium services - [account.targiehandlu.pl/#/premium]({!! $accountUrlPremium !!})

* Permission for **distributing leaflets** outside the stand

* Distribution of lanyards with a logo

* **Sponsor of the catering area** for Visitors

* **VIP zone sponsor** (Exhibitors, Speakers, VIP guests)


## Stand's arrangement - [account.targiehandlu.pl/#/arrangement]({!! $accountUrlArrangement !!})

* Full **booth arrangement** FULLPRINT version

* Full **booth arrangement** OSB+logotype version

* **Counter** with overprint

* **Carpet**

* Additional furniture

* **50inches LED screen**

* Independent power connection - 3kW (instead of the standard 300W) if you plan to equip the stand other than 1-2 laptops and TV


## Additional catering vouchers and parking cards [account.targiehandlu.pl/#/vouchers]({!! $accountUrlVouchers !!})

> As a standard, you get not more than 4 catering vouchers (exactly as many as your registred Company Representatives number, but not more than 4 - unless you buy additional vouchers) and 1 parking card


@component('mail::button', ['url' => $accountUrl])
Sign into the Exhibitor's panel 
@endcomponent

Best regards

{{$footer}}

@endcomponent


