@component('mail::message')

# Hello, {{ $p->translate("[[fname]]") }},

Thank you for your interest in attending the E-commerce Berlin Expo on February 22, 2024. 
We noticed that **some fields in your participant registration form were not completed**.  

Please **provide the missing information** so that your registration can be further verified.

@component('mail::button', ['url' => "https://ecommerceberlin.com/recall/.$p->token."?goto=/visit/edit"])
Use the following link to finish your registration
@endcomponent

Please note that **only verified registrations will be eligible for Expo tickets**.

Thank you for your understanding. 

Best regards,
EBE Team

***

# Hallo {{ $p->translate("[[fname]]") }},

Vielen Dank für dein Interesse an der Teilnahme an der E-commerce Berlin Expo am 22. Februar 2024.

Wir haben bemerkt, dass **einige Felder in deinem Anmeldeformular noch nicht ausgefüllt wurden**.
Bitte **vervollständige die fehlenden Angaben**, damit wir deine Anmeldung weiter bearbeiten können.

@component('mail::button', ['url' => "https://ecommerceberlin.com/recall/".$p->token."?goto=/visit/edit"])
Nutze den folgenden Link, um deine Anmeldung abzuschließen.
@endcomponent

Bitte beachte, dass **nur vollständig geprüfte Anmeldungen berechtigt sind, Expo-Tickets zu erhalten**.

Vielen Dank für dein Verständnis.

Herzliche Grüße,
Das EBE Team

@endcomponent