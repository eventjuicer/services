@component('mail::message')

# Hello {{ array_get($profile, "fname") }},

**The E-commerce Berlin Expo 2024 is getting closer and closer!** We would like to inform you that in your exhibitor's account admin panel **you can now order additional services, such as:**

- Complete booth arrangement with full print back wall, counter, carpet and leaflet holder
- Carpet equipment
- 50 inch LED display
- Foldable brochure rack display
- Additional electricity connection

The deadline for the complete booth arrangement orders is **15th December, 2023.**  If you are interested make sure to place your order as soon as possible as later prices will go up and availability may run out of stock. (Be aware that your basic exhibition space doesn't include a back wall and a carpet. It's an open space you can arrange on your own)

Planning to build a stand yourself? Report this to your Designated Account Manager as soon as possible and they will provide you with our construction regulations.

@component('mail::button', ['url' => $accountUrlArrangement])
Sign Into My Account
@endcomponent

Let me know if you have any questions.
 
Best regards,

{{$footer}}

@endcomponent