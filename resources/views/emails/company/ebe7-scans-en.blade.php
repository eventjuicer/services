@component('mail::message')

# Hi {{ array_get($profile, "fname") }}, 

We've prepared something special for you! At the Expo, you can easily **collect the contact details of the visitors** you meet there. It's effortless; we have prepared a step by step instruction for you in your Exhibitor's Panel.

@component('mail::button', ['url' => $accountUrlBadgescanner])
Badge scanning manual
@endcomponent

Please note that when you open [expojuicer.com](http://expojuicer.com) on your phone, be sure to select your company name. **This is crucial to ensure that the contact details are saved to your profile.**

All the contact details you collect will be immediately saved in the *Scanned leads* section of your Exhibitor's panel. To view all the contact information and comments, please use the export function.

If you have any questions, please don't hesitate to ask!

Best Regards,

{{$footer}}

@endcomponent
