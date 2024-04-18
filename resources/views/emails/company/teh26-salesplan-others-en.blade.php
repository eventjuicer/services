@component('mail::message')
 
# Hi {{ array_get($profile, "fname")  }},

Next Ecommerce Warsaw Expo will be held in autumn - on 25th of October - at EXPO XXI Warsaw.

@component('mail::panel')

Sales of exhibition spaces starts on 

## Wednesday 11:00 am CET

[Hall plan, prices](https://ecommercewarsaw.com/exhibit)

@endcomponent


## Interested in 3 or more booths? 

If you need 3 or more booths, please contact us before Tuesday 


Regards, 

{{$footer}}

@endcomponent

