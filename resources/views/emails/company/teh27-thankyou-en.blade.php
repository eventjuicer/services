@component('mail::message')
 
# Hello {{ array_get($profile, "fname")  }},

Thank you for you participation in recent edition of "Targi eHandlu"

Express your opinion.

@component('mail::button', ['url' => "https://ecwe.pl/s/bxqj"])
Survey
@endcomponent


## We will soon provide more information about the "upgraded" E-commerce Warsaw Expo event, which will take place on October 24th, 2025 (EXPO XXI, Warsaw)

Wholesale sales of exhibition packages will start later this week. Early-bird and public sales will commence next week.

Regards, 

{{$footer}}

@endcomponent

