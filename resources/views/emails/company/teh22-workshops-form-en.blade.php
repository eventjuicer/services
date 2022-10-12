

@component('mail::message')
 
Hello {{ array_get($profile, "fname") }},

During upcoming Ecommerce Warsaw Expo, we are opening workshop zone. 

**Do you want to organize a workshop about your product/service?**

@component('mail::button', ['url' => "https://targiehandlu.pl/workshops"])
Submit an application
@endcomponent


**At the moment we have a confirmation from the following companies:**

* Spark
* Global4Net
* Shoper
* IDEA commerce
* Expandeco
* OLX
* AVOCADO Soft
* Ergonode
* Samba.ai
* edrone 


## Key information

We expect to have **maximum 12 slots** (2 zones, 6 workshops per zone; workshops starting from 11:00)

A person conducting workshop will have **30 minutes + 15 minutes for Q&A** (during Q&A lecturer of next workshop will prepare for his/her workshop) 

Target participants  of the workshops (20-25 people) are participants accepted by you via Exhibitor's Panel (participants will be able to submit their interest via workshop profile; )

A person conducting workshop will have a **laptop and a microphone.**

Participants will have **LED displays and headphones.**

We will be starting **promotional activities since upcoming Monday.**

Cost of the workshop slot is **220 EUR net.**

All workshop participants will have **unlimited access to the VIP ZONE.**

##  IMPORTANT! We are closing the application after reaching out 12 slots/submissions.


@component('mail::button', ['url' => "https://targiehandlu.pl/workshops"])
Submit an application
@endcomponent



regards,

{{$footer}}

@endcomponent



