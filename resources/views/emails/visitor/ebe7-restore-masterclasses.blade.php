@component('mail::message')

Hello {{ $p->translate("[[fname]]") }},

**We are thrilled to announce the launch of a new, free-to-attend format** for this year's E-commerce Berlin Expo: **Masterclasses**.

Take advantage of this opportunity to learn from the **experts from** renowned brands such as **Sendinblue, Custobar, Mondu, Zissu, FedEx Express, everstox, Xentral, axytos, Tradebyte and Intive.** With topics varying from **multichannel marketing to e-commerce logistics, and growth strategies**, there's something for everyone. 

[Check the full masterclasses agenda here](https://ecommerceberlin.com/masterclasses)

## Now, what do you have to know about the Masterclasses?

@component('mail::panel')

**The registration is starting on Thursday (09.02) at 8:00**

Participation is **free of charge**, but the **seats are limited** to 30 for each session.

You can only take part in **one session!**

@endcomponent

**Presenters will review all applications and we will notify you via email if you have been accepted**. If there won’t be a free slot for you - no worries! You will be able to apply for another Masterclass then.


See you on E-commerce Berlin Expo 2023!

Best regards,

EBE Team

**[Newsletter configuration]({{ $unsubscribe }})**

@endcomponent
