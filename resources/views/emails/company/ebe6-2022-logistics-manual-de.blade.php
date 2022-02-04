

@component('mail::message')

# Hallo {{ array_get($profile, "fname") }},

Wir arbeiten intensiv daran, dass alles für die E-commerce Berlin Expo 2022 bereit ist, und sicher auch ihr!

Damit eure Arbeit an eurem Stand noch einfacher wird, hier eine kleine Zusammenfassung für euch.

Ihr könnt den Standbau immer noch bei uns bestellen (in eurem Ausstellerprofil) oder gerne auch selbst vornehmen. In diesem Falle vergisst bitte nicht, unsere Allgemeinen Geschäftsbedingungen für den Standbau und -gestaltung zu berücksichtigen:

@component('mail::button', ['url' => 'https://res.cloudinary.com/ecommerceberlin/image/upload/v1643909265/Logistics/Exhibitor%E2%80%99s%20Manual/EBE_2022_-_Stand_construction_terms_and_regulations_DE.pdf'])
AGB für den Standbau
@endcomponent

Die wichtigsten Hinweise zur Vorbereitung auf die Messe haben wir in unserem Ausstellerhandbuch zusammengefasst. Bitte schaut es euch an und lasst uns wissen, wenn etwas nicht verständlich ist:

@component('mail::button', ['url' => 'https://res.cloudinary.com/ecommerceberlin/image/upload/v1643909432/Logistics/Exhibitor%E2%80%99s%20Manual/EBE_2022_-_Exhibitor_s_Manual_DE.pdf'])
Ausstelleranleitung
@endcomponent

Wenn du Fragen zur Standgestaltung hast, melde dich bitte bei mir und ich helfe dir gerne weiter.

Beste Grüße,
 
{{$footer}}

@endcomponent
