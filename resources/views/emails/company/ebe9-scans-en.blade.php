@component('mail::message')

# Hi {{ array_get($profile, "fname") }}, 

We have something special for you! At the Expo, you can easily **collect the contact details of the participants** you meet at the event. It’s incredibly simple – we’ve prepared an intuitive system for you that works in just a few easy steps:

@component('mail::panel')

## 1. Click the login link to the Networking Platform: 

@component('mail::button', ['url' => $accountUrlReps])
Access your team’s login links
@endcomponent

## 2. Scan a participant:  

Once you log in and scan a participant’s badge, their contact details will be **automatically saved** in your contacts section on the ecomm.berlin platform.

## 3. Send a message: 

After scanning, you can immediately send the participant a message to start building connections right away.

## 4. Export your contacts after the event:  

Once the event is over (February 20th, 2025), you’ll be able to download a CSV file with all the contacts scanned by your company. 

@endcomponent

If you have any questions, please don't hesitate to ask!

Best Regards,

{{$footer}}

@endcomponent