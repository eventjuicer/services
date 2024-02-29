@component('mail::message')
 
# Hi {{ array_get($profile, "fname") }},

We would like to remind you of the limited-time Early Bird sales round for Exhibitors of the previous edition of the E-commerce Berlin Expo, which will begin tomorrow March 5th, 2024 at 11:00 AM.

To view all available exhibition spaces, please click on the link below, which will direct you to the booking map.

@component('mail::button', ['url' => "https://ecommerceberlin.com/exhibit"])
Check the map here
@endcomponent

Please note that some spots may have already been booked by companies who visited us at the sales point during the show.

Best regards,

{{$footer}}

@endcomponent