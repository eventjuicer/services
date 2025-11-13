@component('mail::message')

# Hello {{ array_get($profile, "fname") }},

**The E-commerce Berlin Expo 2026 is getting closer and closer!** We would like to inform you that on your exhibitor platform you can now order additional services, such as:

- complete booth arrangement with a full-print back wall, counter, carpet, and leaflet holder,
- separate carpet equipment,
- TV display (available exclusively as an upgrade for full booth arrangement orders).

**Planning to use the free basic furniture set?** Make sure to add it to your account for free [here](https://account.ecommerceberlin.com/#/arrangement/2832/show). It won’t be provided **unless selected in advance**.

@component('mail::button', ['url' => $accountUrlArrangement])
Sign Into My Account
@endcomponent

**Important**: the deadline for ordering full booth constructions is **December 15th, 2025**. Please note that prices will increase **after November 30th**, and availability may become limited. Also, please note that your basic exhibition space does not include a back wall or carpet. You can either arrange these items on your own or order them through the platform.

**Building a stand on your own?** Unless you have done it already, please notify your Account Manager and submit your **stand plans** along with the signed **Technical Guidelines** document by **December 15th, 2025** at the latest. It is essential in order to get permission to build a stand.

**[Download the Technical Guidelines](https://asset.cloudinary.com/ecommerceberlin/dfdb2bb950ed6544292dd7af4dfeb2d2)** and send it back signed along with the required documents.

If you have any questions, please feel free to reach out.
 
Best regards,

{{$footer}}

@endcomponent