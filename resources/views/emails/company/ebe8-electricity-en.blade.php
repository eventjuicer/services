@component('mail::message')

# Hello {{ array_get($profile, "fname") }},

To ensure that you are almost ready to participate in the Expo, we have a gentle reminder about electricity connection to the exhibitor booth.

Are you planning to bring laptops or coffee machines to your booth? Check how much electricity connection you have! The standard electric power connected to a stand is 500W (for 9 sqm stands) or 1000W (for 18 sqm stands).

You can still order an additional electricity connection - 1000W or 3000W depending on your needs, simply click on Stand arrangement and choose electricity connection.

Please note that the **deadline of placing your order is **FEBRUARY 5th**.

@component('mail::button', ['url' => 'https://account.ecommerceberlin.com/#/arrangement']) Stand arrangement
@endcomponent

If you have any questions regarding preparation for the Expo, please get back to me and I’ll be happy to assist you.

Regards,

{{$footer}}

@endcomponent