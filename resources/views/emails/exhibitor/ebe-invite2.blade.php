

@component('mail::message')



<div style="text-align: center;">
	<a href="{{$promolink}}" target="_blank">
	<img src='https://res.cloudinary.com/ecommerceberlin/image/upload/f_auto/v1648205241/6_get_your_ticket_646x220.png' alt="" style="margin-top: 10px; margin-bottom: 30px; max-height: 250px;" />
	</a>
</div>


# Hi,

## We would like to let you know that {{  array_get($companydata, "name") }} is exhibiting at the E-Commerce Berlin Expo 2022 on **5th May** at STATION Berlin, Luckenwalder Str. 4-6.

Please consider this email your personal invitation from us. We hope to see you at our booth during the Expo!

##Why should you visit?

All the major decision-makers from digital commerce, marketing, and innovation come together at E-commerce Berlin Expo. Over **200 companies** will exhibit and **50+ leading experts** will present innovative and forward-looking developments and trends.

Experts from **Zalando, MediaMarktSaturn, Douglas, NBB, KaDeWe, TUI, MyToys, Otto** will help you find new opportunities to grow your e-commerce business.

E-commerce Berlin Expo is your chance to bring yourself up-to-date and future-proof.

You can register for the full day of networking, dialogue, education, and inspiration for free. Get your ticket now and stop by our stand to chat with us.

@component('mail::button', ['url' => $promolink])
	Click here to register for a free ticket
@endcomponent

If you haven't seen the full agenda yet, click here: [https://ecommerceberlin.com/schedule](https://ecommerceberlin.com/schedule)

The expo and conference are **free of charge**, but participants must register in advance on the official website of the event.

No matter what E-commerce challenge you're facing, you and your colleagues will find a warm welcome, E-commerce experts, and the best advice under one roof!

We’re looking forward to meeting you!

Kind Regards,


@endcomponent


