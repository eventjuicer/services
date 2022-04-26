

@component('mail::message')

# Hello {{ array_get($profile, "fname") }},

Just one week left till the E-commerce Berlin Expo, so we have collected some organizational information for you:

1. Below you can find the link to the Exhibitor’s Manual file collecting all important information	

@component('mail::button', ['url' => 'https://res.cloudinary.com/ecommerceberlin/image/upload/v1643909432/Logistics/Exhibitor%E2%80%99s%20Manual/EBE_2022_-_Exhibitor_s_Manual_ENG.pdf'])
Exhibitor’s Manual
@endcomponent

2. If you’re arriving to STATION (Luckenwalder Str. 4–6, 10963 Berlin) by car, please keep in mind:

* **Entering by car will be only possible one day before the Expo - on May 4th**. The opening hours: 1:00 PM - 10:00 PM
* For stand numbers starting with letters A or L please enter from Luckenwalder Straße (Hall 3)
* For stand numbers starting with letters B, C, D & E please enter from Trebbiner Straße (Hall 7)
* Unload time is limited to **1 hour** per vehicle
* A deposit in the amount of **50€ (cash)** per vehicle will be required at the entrance.

3. **During the day of the Expo parking on the premises of the venue is NOT possible**. We recommend parking on the streets surrounding the venue or using parking next to the STATION Berlin: Parkhaus Gleisdreieck: Schöneberger Ufer 3.

4. You can enter the STATION by car again one hour after the Expo is finished (after 6:00 PM on May 5th).

Please let us know if you have any questions and we’re excited to see you soon at the Expo! 

All the best,

{{$footer}}

@endcomponent



