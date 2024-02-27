@component('mail::message')
 
# Hi {{ array_get($profile, "fname")  }},

We wanted to say thank you for being a part of the E-commerce Berlin Expo 2024! We hope you had a great time and that the event met or exceeded your expectations.

We would like to ask for your feedback to help us make the event even better next year. We would appreciate it if you could spare a few minutes to complete a survey by clicking the button below. You can also share it with your colleagues who attended the event.

@component('mail::button', ['url' => 'https://forms.gle/gGXawHbYEWfiLntw7'])
SURVEY
@endcomponent

As this year's Exhibitor, **we are happy to inform you that early-bird sales for the 2025 event will start at the beginning of March.** We will contact you soon with details on the best available spaces and lowest prices.

Thank you for taking the time to complete the survey, and we hope to see you again in Berlin next year!

Cheers

{{$footer}}

@endcomponent
