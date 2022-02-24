

@component('mail::message')

# Hello {{ array_get($profile, "fname") }},

There’s a kind reminder that it’s the last moment to order additional services for your stand - the deadline is **February 28th!**

Beside planning the booth equipment please also think about the electricity connection you may need there.

**In your standard package we provide you only with 500W** (9sqm stand) **or 1000W** (18sqm stand). 

**If you plan on plugging in more items, we recommend you increase the power supply.** 

1000W service is sufficient for having 2-3 laptops and 1 bigger display. **It won’t be enough if you’re planning to have additional equipment, such as a coffee machine, etc.** 
You can order additional connection of 1000W or 3000W through your Exhibitor’s profile:

@component('mail::button', ['url' => $accountUrl])
Sign Into My Account
@endcomponent

If you have any questions or something isn’t clear, do not hesitate to contact me.

Regards,

{{$footer}}

@endcomponent



