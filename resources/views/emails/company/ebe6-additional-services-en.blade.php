

@component('mail::message')

# Hello {{$profile->translate("[[fname]]")}},

**The E-commerce Berlin Expo 2022 is getting closer and closer!** We would like to inform you that in your exhibitor's account admin panel **you can now order additional services, such as:**

* Complete booth arrangement with full print back wall, counter, carpet and leaflet holder
* Carpet equipment
* 50 inch LED display
* Foldable brochure rack display
* Additional electricity connection

The services are available online till November 30th, 2021.
​
Check out prices, images and specs by clicking the button below.

@component('mail::button', ['url' => $accountUrl])
Sign Into My Account
@endcomponent

Let me know if you have any questions.
 
Best regards,
Marta Masternak - Account Manager
E-commerce Berlin Expo

@endcomponent



