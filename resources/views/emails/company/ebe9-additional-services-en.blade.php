@component('mail::message')

# Hello {{ array_get($profile, "fname") }},

**The E-commerce Berlin Expo 2025 is getting closer and closer!** We would like to inform you that in your exhibitor's account admin panel **you can now order additional services, such as:**

- complete booth arrangement with full print back wall, counter, carpet and leaflet holder,
- carpet equipment,
- foldable brochure rack display,
- additional electricity connection.

@component('mail::button', ['url' => $accountUrlArrangement])
Sign Into My Account
@endcomponent


If you wish to have a standard set of furniture delivered to your stand: 2 hockers and one table, please make sure to tick this option [here](https://account.ecommerceberlin.com/#/arrangement/2832/show) as soon as possible. Otherwise they will not be delivered. 



The deadline for the complete booth arrangement orders is **16th December, 2024.**  If you are interested, please make sure to place your order as soon as possible as later prices will go up and availability may run out of stock. (Be aware that your basic exhibition space doesn't include a back wall and a carpet. It's an open space you can arrange on your own)

Are you planning to build your own stand? Unless you have done it already, please inform your Designated Account Manager as soon as possible and ensure that you have returned the signed document with the technical guidelines for stand construction. Signing it and sending it back is essential in order to get permission to build a stand.

Let me know if you have any questions.
 
Best regards,

{{$footer}}

@endcomponent