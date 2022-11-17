@component('mail::message')
 
# Hello {{ array_get($profile, "fname")  }},

**You can now book an exhibition space for the upcoming Ecommerce Warsaw Expo** Spring edition!

The date of the event: 6th of April 2023 (EXPO XXI Warsaw)

Visit [targiehandlu.pl/exhibit](https://targiehandlu.pl/exhibit) to check available booths, prices and reserve a space.

Some booths are already reserved by TOP30 of the Exhibitor's Contest (winners of the earlybird booking prize)

Best regards

{{$footer}}

@endcomponent
