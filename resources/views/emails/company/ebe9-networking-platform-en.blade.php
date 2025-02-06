@component('mail::message')
 
# Hello {{ array_get($profile, "fname")  }},

We are excited to announce that our new **[Networking Platform](https://ecomm.berlin/)** is live and ready for use! Now is the time for teamwork to maximize your meetings and generate as many leads as possible from the EXPO.

@component('mail::panel')
Every company representative marked as **visible** in the Exhibitor Platform has received an **individual login link** to the Networking Platform and a quick instruction on navigating it. The link was sent to the email address provided when the representative was added to your company account.

Login links for all representatives are also available in the *Company Representatives* section.
@endcomponent

You can manage your company representatives and their visibility directly from the Exhibitor Platform: 

@component('mail::button', ['url' => $accountUrlReps])
Go to the Company Representatives list
@endcomponent

Our Account Managers are happy to assist you with any questions and help you make the most of our tools.

Feel free to reach out! We look forward to connecting with you!

PS. Later this week, the option to send VIP invitations will be activated, along with our promotional materials - stay tuned!

Best regards, 

{{$footer}}

@endcomponent
