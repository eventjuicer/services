@component('mail::message')
 
# Hi {{ array_get($profile, "fname")  }},

Your company's photo collection is waiting to be downloaded


@component('mail::button', ['url' => $photosUrl ])
Download as .zip
@endcomponent


Next Ecommerce Warsaw Expo will be held in autumn - on 25th of October - at EXPO XXI Warsaw.

@component('mail::panel')

Sales of exhibition spaces starts on 

## Wednesday 11:00 am CET

[Hall plan, prices](https://ecommercewarsaw.com/exhibit)

@endcomponent
 


Regards, 

{{$footer}}

@endcomponent

