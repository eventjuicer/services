@component('mail::message')

# Hello {{ array_get($profile, "fname") }},

We would like to kindly remind you about the possibility of ordering additional services for your stand with us.

Please double check if you have everything you need in your package, otherwise you may take a look at our range of additional services.

It's highly recommended to place all the orders **before the Christmas holidays** so we can process everything much smoother.

You can still order services, such as:

* Full booth arrangement - the deadline for ordering the service is the **15th December**.
* Carpet equipment
* 50 inch LED display
* Foldable brochure rack
* Additional electricity connection
 
Important: if you are interested in a **free furniture set (2 chairs and 1 table), click on that option (free of charge!) in the exhibitor panel**.

To check out the prices, specifications and to complete the order, simply click the button below:

@component('mail::button', ['url' => $accountUrlArrangement])
Sign Into My Account
@endcomponent

If you have any questions feel free to contact us. 

Regards,

{{$footer}}

@endcomponent
