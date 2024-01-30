

@component('mail::message')
 

# Hi {{$p->translate("[[fname]]")}},

## Hope you're getting ready for the E-commerce Berlin Expo! 

@component('mail::panel')
Exciting news – one of our exhibitors is eager to connect with you and has sent you a meeting request.
If you're interested, click the button below to approve the meeting. Once approved, the exhibitor will reach out directly to schedule an appointment.
@endcomponent

@component('mail::button', ['url' => $url])
Approve or reject meetup requests
@endcomponent

It's that simple! Happy networking, and wishing you fruitful talks and connections at the Expo.

Best! 
Lucas Zarna, E-commerce Berlin Expo Team.

PS: Link does not work? try this - {!!$url!!}

@endcomponent



