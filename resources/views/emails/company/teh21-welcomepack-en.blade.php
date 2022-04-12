

@component('mail::message')
 
# Hello {{ array_get($profile, "fname")  }},

This is an automated message that summarizes the number of catering vouchers and parking cards you will receive in your welcome pack.

## Is it correct?

@component('mail::panel')

Catering vouchers {{ array_get($additionalData, "cateringAssigned")  }}

Parking cards {{ array_get($additionalData, "parkingAssigned")  }}

@endcomponent

**If above numbers are incorrect, please purchase extra catering vouchers and/or parking cards. Deadline 1pm**

@component('mail::button', ['url' => $accountUrlVouchers])
Sign in and go to vouchers
@endcomponent

## How is it counted?

Representatives submitted  {{ array_get($additionalData, "repsCount")  }}

Number of booths {{ array_get($additionalData, "howManyBooths")  }} 

Additional vouchers purchased {{ array_get($additionalData, "cateringCount")  }} 

(you get max 4 vouchers per booth free - when having all 4 reps submitted. )

Additional parking cards  {{ array_get($additionalData, "parkingCount")  }} 

(you get 1 parkign card per booth free)


Regards, 

{{$footer}}

@endcomponent

