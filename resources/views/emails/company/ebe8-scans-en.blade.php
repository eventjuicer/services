@component('mail::message')

# Hi {{ array_get($profile, "fname") }}, 

We've prepared something special for you! At the Expo, you can easily **collect the contact details of the visitors** you meet there. It's effortless; we have prepared a step by step instruction for you in your Exhibitor's Panel.

@component('mail::button', ['url' => $accountUrlBadgescanner])
Badge scanning manual
@endcomponent

All the contact details you collect will be immediately saved in the *Scanned leads* section of your Exhibitor's panel. To view all the contact information and comments, please use the export function.

**Heads Up!** Once the event is over (22.02), you will have just 7 days to export the scanned records from the exhibitor platform to an Excel file.

If you have any questions, please don't hesitate to ask!

Best Regards,

{{$footer}}

@endcomponent

