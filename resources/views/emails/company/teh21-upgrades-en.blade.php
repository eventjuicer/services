@component('mail::message')
 
# Hello {{ array_get($profile, "fname") }},

**You can extend your exhibition package with additional services. Check available options in the Exhibitor's panel.**

## Premium services - [account.targiehandlu.pl/#/premium]({!! $accountUrlPremium !!})

* Permission for **distributing leaflets** outside the stand

* ~~Distribution of lanyards with a logo~~ SOLD

* Your **logotype on visitors ID's**

* **Sponsor of the catering area** for Visitors

* **VIP zone sponsor** (Exhibitors, Speakers, VIP guests)

* ~~Patronage over the presentation stage D~~ SOLD


## Stand's arrangement - [account.targiehandlu.pl/#/arrangement]({!! $accountUrlArrangement !!})

* Full **booth arrangement** FULLPRINT version

* Full **booth arrangement** OSB+logotype version

* **Counter** with overprint

* **Carpet**

* Additional furniture

* **50'' LED screen**

* Independent power connection - 3kW (instead of the standard 300W) if you plan to equip the stand other than 1-2 laptops and TV


## Additional catering vouchers and parking cards [account.targiehandlu.pl/#/vouchers]({!! $accountUrlVouchers !!})

> As a standard, you get not more than 4 catering vouchers (exactly as many as your registred Company Representatives number, but not more than 4 - unless you buy additional vouchers) and 1 parking card


@component('mail::button', ['url' => $accountUrl])
Sign into the Exhibitor's panel 
@endcomponent

Best regards

{{$footer}}

@endcomponent


