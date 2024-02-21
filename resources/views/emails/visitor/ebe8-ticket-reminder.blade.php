@component('mail::message')

Hi {{ $p->translate("[[fname]]") }},

**Are you planning to visit E-commerce Berlin Expo tomorrow and experience 5 stages with more than 75 speakers & over 280 exhibitors**?

# [YES! I am going]({!! $going !!})

# [NO! I can’t make it]({!! $notGoing !!})

IMPORTANT: Print the ticket in advance to skip any queues on the day of the event!

**If you are unable to print** or accidentally have lost your printed ticket, please **show the code** presented below **at the registration point.**

# {{$hash}}

# EBE 2024 | Plan your day ahead

Time: Thursday / February 22nd, from 9:00 AM to 6:00 PM

Location: STATION Berlin, Luckenwalder Str 4-6, 10963 Berlin

Itinerary:
- Review our [agenda](https://ecommerceberlin.com/schedule) 
- Discover [exhibitors lineup](https://ecommerceberlin.com/exhibitors)
- Study the [venue map](https://drive.google.com/file/d/17T_GNG8zxpm7NTYcOtaTALlCbP1jYMEW/view?usp=sharing)

We wish you a fantastic time at our event.

See you in Berlin!

Lucas, EBE Team

@endcomponent