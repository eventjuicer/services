@component('mail::message')
 
# Hi {{ array_get($profile, "fname")  }},

Your company's photo collection from recent E-commerce Warsaw Expo ("Targi eHandlu") is waiting to be downloaded

@component('mail::button', ['url' => $photosUrl ])
Download as .zip
@endcomponent


Regards, 

{{$footer}}

@endcomponent

