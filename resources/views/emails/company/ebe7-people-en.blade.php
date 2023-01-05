@component('mail::message')

# Hallo {{ array_get($profile, "fname") }},

To improve our communication and to ensure that our messages reach the responsible people on your side in the future, we would like to ask you in this email to kindly fill in the contact section on the exhibitor platform and add your company's employees.

Kindly add, if possible:

**PR Manager**

**Event manager**

**Sales Manager**

This will keep you up to date with future topics concerning, for example, pre-sales, collaboration, event organisation and cooperation offers.

@component('mail::button', ['url' => $accountUrlPeople])
CLICK HERE TO ADD CONTACTS
@endcomponent

Should you have any questions, please let me know.

Best regards,

{{$footer}}

@endcomponent
