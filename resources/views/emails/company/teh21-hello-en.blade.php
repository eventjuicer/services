

@component('mail::message')
 
# Hello  {{ array_get($profile, "fname") }},

We have just released an updated Exhibitor's panel!

Please sign in to check preparation schedule and your upcoming tasks.

At the moment you are encouraged to:

Update your public exhibitor's profile information

Define key people responsible for receiving further communication (PR, Sales, etc)

Check premium offering (every item is exclusive)

Configure your exhibition's space (add LCD display, add complete booth arrangement, etc)

 @component('mail::button', ['url' => $accountUrl])
    Access to exhibitor's account
 @endcomponent
 
 
 Regards,
 
 Karolina Michalak
 
 @endcomponent
 
 
 
 