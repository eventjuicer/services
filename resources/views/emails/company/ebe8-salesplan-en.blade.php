
@component('mail::message')
 
# Hi {{ array_get($profile, "fname")  }},

The 7th edition of the E-commerce Berlin Expo was a resounding success, and we're thrilled to announce the upcoming edition, scheduled for **February 22, 2024**. 

Planning to participate next year? Make sure you **check out the Sales schedule** to stay up-to-date on important dates for booking your space!

## STARTING IMMEDIATELY until MONDAY 13/03/2023

We are happy to offer **wholesale** for all E-commerce Berlin Expo 2023 exhibitors interested in booking **three or more exhibition spaces.**

Hall plan is available here: 

@component('mail::button', ['url' => 'https://res.cloudinary.com/ecommerceberlin/image/upload/v1678110383/Website/booking_map/EBE2024-sales-map-email-v2.png'])
Hall plan
@endcomponent

**If you're interested in this option, please reply to this email.** 

## TUESDAY 14/03/2023

The TOP30 Companies who participated in the Exhibitors promo contest will gain exclusive access to purchase a space. If you are among the TOP30, you will receive a special link to the landing page at least 2 hours before sales start. 

Check the contest ranking [here](https://res.cloudinary.com/ecommerceberlin/image/upload/v1677753261/ebe7/RANKING-TOP30.png)

## WEDNESDAY 15/03/2023

All E-commerce Berlin Expo 2023 exhibitors will be able to make a purchase and gain access to the Early Bird Sales Pool. 

## THURSDAY 16/03/2023

Last but not least, everyone else will have access to the sales map, where you can hunt for leads and opportunities! Bookings can be made at ecommerceberlin.com

So fasten your seatbelts and get ready. We're excited to come back on February 22, 2024 and look forward to seeing you there. If you have any questions, feel free to reach out.

Cheers

{{$footer}}
 
@endcomponent
