

@component('mail::message')

# Hello {{ array_get($profile, "fname") }},

Here’s your main contact person from the E-commerce Berlin Expo Team. You can find my contact details in the footer - feel free to reach out if you have any questions about your participation in the Expo.
 
Even though the date of the Expo got recently postponed, there isn’t much time left till we all meet in Berlin!
 
We want to make sure you are all set to enjoy the Event, so we kindly remind you about the possibility of ordering additional services for your stand with us. 
 
**Only till 28th of February 2022 you can still order services, such as:**
​
* Complete booth arrangement (with full print back wall, counter, carpet and leaflet holder)
* Carpet equipment
* 50 inch LED display
* Foldable brochure rack 
* Additional electricity connection
​
To check out the prices, specifications and to complete the order, simply click the button below:

@component('mail::button', ['url' => $accountUrl])
Sign Into My Account
@endcomponent

If you have any questions feel free to contact us. 

Regards,

{{$footer}}

@endcomponent



