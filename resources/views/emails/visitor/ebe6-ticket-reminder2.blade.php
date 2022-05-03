@component('mail::message')

(unten auf deutsch)

Hi {{ $p->translate("[[fname]]") }},

**Are you planning to visit E-commerce Berlin Expo this Thursday and check 56 presentations & over 200 exhibitors**?

# [YES! I am going]({!! $going !!})

# [NO! Release my ticket]({!! $notGoing !!})


We are currently limited by the number of people we can welcome at our event. 
Upon exceeding 8,000 downloaded tickets, we will no longer allow downloads or registrations for the event. 

Full agenda of presentations - [https://ecommerceberlin.com/schedule]({!!$url!!})

Thank you!

E-commerce Berlin Expo Team


* * *

Hallo  {{ $p->translate("[[fname]]") }},

Du hast bis jetzt Dein Ticket nicht runtergeladen. 

**Planst du bei der E-commerce Berlin Expo am Donnerstag dabei zu sein und dir mehr als 56 Speaker und 200 Aussteller anzusehen?**


# [JA!]({!! $going !!})

# [Nein!]({!! $notGoing !!})


Danke,

Das E-commerce Berlin Expo Team


@endcomponent