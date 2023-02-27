@component('mail::message')
 
# Hi {{ array_get($profile, "fname")  }},

Wir wollten uns bedanken, dass du Teil der E-commerce Berlin Expo 2023 warst! Wir hoffen, dass du eine tolle Zeit hattest und dass das Event deinen Erwartungen entsprochen hat oder sie sogar übertroffen hat.

Wir würden gerne um dein Feedback bitten, um das Event nächstes Jahr noch besser zu machen. Es wäre super, wenn du dir ein paar Minuten Zeit nehmen könntest, um eine Umfrage auszufüllen, indem du auf den Button unten klickst. Du kannst die Umfrage auch gerne mit deinen Kollegen teilen, die auch am Event teilgenommen haben.

@component('mail::button', ['url' => 'https://docs.google.com/forms/d/e/1FAIpQLSdISRIDDYbQXOhAWS13mwS8phTEnat90Cm3xyD19ItK_C4Kwg/viewform?usp=sf_link'])
UMFRAGE
@endcomponent

Als diesjähriger Aussteller freuen wir uns, dir mitteilen zu können, dass der Vorverkauf für das Event 2024 im März beginnen wird. Wir werden dich bald mit Details zu den besten verfügbaren Plätzen und den niedrigsten Preisen kontaktieren.

Vielen Dank, dass du dir die Zeit genommen hast, die Umfrage auszufüllen, und wir hoffen, dich nächstes Jahr wieder in Berlin zu sehen!

Cheers

{{$footer}}

@endcomponent