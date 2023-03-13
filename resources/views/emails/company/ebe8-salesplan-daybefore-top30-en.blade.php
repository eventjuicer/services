@component('mail::message')
 
# Hi {{ array_get($profile, "fname") }} ,

We would like to remind you that the **exclusive sales round for the TOP30** companies in the recent Exhibitors’ Contest will begin **tomorrow**, March 14th, 2023 at 11:00 AM. 

Please note that the reservation of exhibition spaces will only be available until the end of the day on March 14th, 2023.

The sales round for the OTHER exhibitors from the 2023 edition will be released on March 15th, 2023.

To view all available exhibition spaces, please click on the following link:

@component('mail::button', ['url' => 'https://ecommerceberlin.com/top30earlybird_t63sUa9'])
Map, prices, booking here
@endcomponent

If you have any questions feel free to contact us!

Cheers,
 
{{$footer}}
 
@endcomponent