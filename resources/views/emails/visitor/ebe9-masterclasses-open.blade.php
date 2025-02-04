@component('mail::message')

Dear {{ $p->translate("[[fname]]") }},

We would like to inform you that submissions for the masterclasses at the E-commerce Berlin Expo are now open. 

#It's your chance to learn from industry experts in a focused setting, and get practical strategies and insider knowledge.

@component('mail::panel')

You can submit your application until **February 11th**. Submissions are free of charge.

This year, there are **32 masterclasses** to choose from, spread over two days. You can sign up for up to **5** masterclasses.

Each masterclass host selects **40 participants** from the pool of applicants. If you are selected, you will receive an email confirmation.

@endcomponent

Check the full masterclasses agenda and apply here:

@component('mail::button', ['url' => 'https://ecommerceberlin.com/masterclasses?utm_source=email&utm_medium=email&utm_campaign=system_mailing_visitors_masterclasses']) Sign up for a masterclass
@endcomponent

See you there,
EBE Team

@endcomponent