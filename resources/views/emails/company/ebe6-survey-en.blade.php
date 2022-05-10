@component('mail::message')
 
# Dear {{ array_get($profile, "fname") }},

**Many thanks for being a part of the E-commerce Berlin Expo 2022!**

We hope you enjoyed the event as much as we did and that it met (or even exceeded!) your expectations. 

Speaking of which - **your feedback is extremely important to us** as it's the only way we can improve and provide you with an even higher-value experience in the future. 

We would greatly appreciate it if you (or your colleagues that took part in the event) could take a few minutes to complete the survey below and share your feedback with us. 

@component('mail::button', ['url' => 'https://forms.gle/4W21JdyDUpKX1FkT7'])
SURVEY
@endcomponent

Next week we'll start the early-bird sales for 2023 edition, available exclusively for this year's Exhibitors. 

We'll get in touch with you shortly regarding the best available spaces and the lowest prices.

Thanks for taking the time and we hope to see you in Berlin next year!

All the best,

{{$footer}}

@endcomponent