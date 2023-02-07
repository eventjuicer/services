@component('mail::message')
 
Hello,

In the Exhibitor's Panel there are waiting meetng requests from participants of upcoming E-commerce Berlin Expo.

Invitations were sent by your Exhibitor's public profile.

Please RSVP to avoid further reminders.

**Accepting meeting request reveals the Participant's contact details ** 

@component('mail::button', ['url' => $url])
Sign up to check meeting requests
@endcomponent

regards,

{{$footer}}

@endcomponent