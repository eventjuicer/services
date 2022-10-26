@component('mail::message')
 
# Cześć {{ array_get($profile, "fname")  }},

To już prawdopodobnie ostatnia nasza wiadomość przed tym jak zobaczymy się na Targach. 

## Skanowanie Zwiedzających

Dane kontaktowe Zwiedzających odwiedzających stoisko Twojej firmy **może pozyskiwać każdy reprezentant firmy posiadający smartfona.**. 

@component('mail::button', ['url' => $accountUrlBadgescanner])
Instrukcja skanowania
@endcomponent


Regards, 

{{$footer}}

@endcomponent

