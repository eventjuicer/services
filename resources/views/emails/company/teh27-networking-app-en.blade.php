@component('mail::message')

# Hello {{ array_get($profile, "fname") }},

We have some exciting news for you!  

We’re thrilled to introduce our **new networking platform** - ecwe.pl, designed to make it easier for you to connect with others and maximize the benefits of your participation in the EXPO. 

# What's new?

Every registered company representative will receive an **individual account** with access to all our networking tools. 

**Key features of the platform:**

- **Invite participants to connect** – browse profiles and send invitations (each representative has 50 invitations available).  

- **Chat with participants** – once an invitation is accepted, continue the conversation in the **built-in chat** and schedule meetings.  

- **VIP invitations** – (coming soon) invite key partners to the event.  

- **Badge scanning** – during the event, scan QR codes on other participants' badges to quickly exchange contact details.  

@component('mail::panel')
# How to get started?

In the Exhibitor Panel, you’ll find **individual login links** to the networking platform for each of your company representatives. Representatives marked as *visible* will be visible on the platform and can start using it right away. 

**Share these links with your team** – so they can start building valuable business relationships and make the most of our networking tools.

@component('mail::button', ['url' => $accountUrlReps])
Go to the Exhibitor Panel and download login links
@endcomponent
@endcomponent

If you have any questions or need assistance using the platform, feel free to reach out.

Best regards,  
{{ $footer }}

@endcomponent