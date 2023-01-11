@component('mail::message')


<div style="text-align: center;">
	<a href="{{$promolink}}" target="_blank">
	<img src='{{$imageEnc}}' alt="" style="margin-top: 10px; margin-bottom: 30px; max-height: 250px;" />
	</a>
</div>

# Hi,

## We would like to let you know that {{  array_get($companydata, "name") }} is exhibiting at the E-Commerce Berlin Expo 2023 which will take place on **23rd of February** at STATION Berlin, Luckenwalder Str. 4-6.

Please consider this email your personal invitation from us. We hope to see you at our booth during the Expo!

**Get your free ticket** now and stop by our stand to chat with us - **click here to register:**

@component('mail::button', ['url' => $promolink])
	Click here to register for a free ticket
@endcomponent


##Why should you visit?

All the major decision-makers from digital commerce, marketing, and innovation come together at E-commerce Berlin Expo for a one-of-a-kind networking experience.

**Over 250 companies will exhibit** and **over 70 leading experts** from giants such as **Borussia Dortmund, Zalando, Meta, OMIO, eBay, EVENTIM, Mercedes-Benz Cars, Paul Hewitt, Amorelie, Farfetch and Thomann.io,** will present innovative and forward-looking developments and trends to will help you find new opportunities to grow your e-commerce business.

E-commerce Berlin Expo enables you to connect with other like-minded individuals striving for success, find partnerships that will last for years, as well as expand your knowledge and skillset to stay ahead of the competition.

Sounds good?

You can register for the full day of networking, dialogue, education, and inspiration - and all that completely free of charge! All you have to do is register in advance on the official website of the event.


Join us for an unforgettable experience that will take your business to the next level!

We're looking forward to meeting you!

@endcomponent
