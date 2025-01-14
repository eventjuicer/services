@component('mail::message')

# Hello {{ array_get($profile, "fname") }},

Just one month left until the E-commerce Berlin EXPO, so we have collected some organizational information for you:

1. Below you can find the link to the Exhibitor's Manual file collecting all important information:	

@component('mail::button', ['url' => "https://res.cloudinary.com/ecommerceberlin/image/upload/v1705230024/Logistics/Exhibitor%27s%20Manual%202024/EBE_24_-_Exhibitor_Manual_EN.pdf"])
LINK
@endcomponent

2. If you’re arriving to STATION (Luckenwalder Str. 4–6, 10963 Berlin) by car, please keep in mind:

- Entering by car will be only possible one day before the Expo - on February 18th between **10:00 PM and 10:00 PM**;
- Stand numbers starting with letters **A, B or M** please enter from Luckenwalder Straße (Hall 3), 
- Stand numbers starting with letters **C, D, E & F** please enter from Trebbiner Straße (Hall 7);
- Unload time is limited to 1 hour per vehicle;
- A deposit in the amount of **100€ (cash)** per vehicle will be required at the entrance.

3. Parking on the venue premises during the Expo day is **NOT** possible. We recommend parking on the streets surrounding the venue or using parking next to the STATION Berlin: ampido Parkplatz,  Schöneberger Ufer 3.

4. Due to safety regulations, entering the venue premises by car **after** the Expo is possible **not earlier** than one hour after the Expo is finished (after 6:00 PM on February 20th). Deposit of **100€ (cash)** needed as well. 

5. Arriving to the venue by metro: the closest station is U Gleisdreieck. 

Please let us know if you have any questions and we're excited to see you soon at the Expo! 

All the best,

{{$footer}}

@endcomponent