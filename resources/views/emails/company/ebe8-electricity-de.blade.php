@component('mail::message')

# Hallo {{ array_get($profile, "fname") }},

Um sicherzustellen, dass ihr für die Expo bestmöglich vorbereitet seid, möchten wir Euch daran erinnern, dass ihr noch immer extra Strom bestellen könnt.

Plant ihr, Laptops oder Kaffeemaschinen an euren Stand zu bringen? Bitte prüft vorher, wie viel Stromanschluss ihr habt! Die Standard-Stromversorgung für einen Stand beträgt 500 W (für 9 m² große Stände) oder 1000 W (für 18 m² große Stände).

Je nach Bedarf könnt ihr weiterhin extra Strom bestellen - 1000W oder 3000W. Hierfür bitte die  untenstehende Taste 'Standdienste' anklicken, die gewünschte Stromoption wählen und bestellen. 

Bitte beachtet, dass **Bestellungen bis spätestens 5. FEBRUAR** möglich sind.

@component('mail::button', ['url' => 'https://account.ecommerceberlin.com/#/arrangement']) Standdienste
@endcomponent

Falls noch Fragen zur Vorbereitung auf die Expo bestehen, stehe ich gerne zur Verfügung.

Beste Grüße,
 
{{$footer}}

@endcomponent