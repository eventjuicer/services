

@component('mail::message')
 
# Hello {{ array_get($profile, "fname") }},

We would like to kindly remind you about the **limited Early Bird sales round** for Exhibitors of the previous edition of the E-commerce Berlin Expo starts **tomorrow, 5th March 2020 from 12:00 PM**.

The link below will redirect you to the booking map where you will see all the exhibition spaces available. 

@component('mail::button', ['url' => "https://ecommerceberlin.com/exhibit"])
Check the map here
@endcomponent

**ATTENTION!** Please be aware that some of the spots may be already booked by "top30" winners of the recent Exhibitors' Contest and marked as "R". 

You can make reservations for the Early Bird price only until the end of the month (31.03.20). After this date, the Early Bird offer will expire and the prices for exhibition spaces will increase.

Best regards,

Lucas Zarna

@endcomponent



