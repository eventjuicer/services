@component('mail::message')
 
# Hey {{ array_get($profile, "fname")  }},

@component('mail::panel')

**Der geschlossene Early-Bird-Verkauf beginnt um 11:00 Uhr.** Buche deine Ausstellungsfläche für die 2-tägige E-commerce Berlin Expo 2025.

Expo Datum: 19. & 20. Februar 2025, Station-Berlin.

**Hier ist der Lageplan: [ecommerceberlin.com/exhibit](ecommerceberlin.com/exhibit)**

@endcomponent

Bitte beachte, dass Reservierungen für zwei Stände im gleichen Preissegment (z.B. zwei HOT-Stände und zwei ULTRA-Stände) nicht gleichzeitig von unserem System vorgenommen werden können. Wenn du Stände in diesem Format reservieren möchtest, mache bitte separate Buchungen.

Am Tag der Expo sind Stände aus dem Vorverkaufsbestand durch grau hinterlegte nicht verfügbare Slots gekennzeichnet.

Beste Grüße,

{{$footer}}

@endcomponent