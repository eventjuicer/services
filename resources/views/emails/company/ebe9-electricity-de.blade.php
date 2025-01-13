@component('mail::message')

# Hallo {{ array_get($profile, "fname") }},

Um sicherzustellen, dass ihr für die Expo bestmöglich vorbereitet seid, möchten wir Euch daran erinnern, dass ihr noch immer extra Strom bestellen könnt.

Plant ihr, Laptops oder Kaffeemaschinen an euren Stand zu bringen? Bitte prüft vorher, wie viel Stromanschluss ihr habt. Wenn ihr mehr als 500W oder 1000W, je nach dem Austellerpaket, verwenden möchtet, musst du zusätzlichen Strom über die Ausstellerplattform bestellen.

Die Standard-Stromversorgung für einen Stand beträgt 500 W (für 9 m² große Stände) oder 1000 W (für 18 m² große Stände). Diese Menge an Strom ist **nur ausreichend**, um ein paar Laptops und einen Fernseher zu betreiben.

Je nach Bedarf könnt ihr weiterhin extra Strom bestellen - 1000W oder 3000W. Hierfür bitte die  untenstehende 'Standdienste' anklicken, die gewünschte Stromoption wählen und bestellen. 

Bitte beachtet, dass **Bestellungen bis spätestens 17. JANUAR** möglich sind.

@component('mail::button', ['url' => $accountUrlArrangement]) Standdienste
@endcomponent

Falls noch Fragen zur Vorbereitung auf die Expo bestehen, stehe ich gerne zur Verfügung.

Beste Grüße,
 
{{$footer}}

@endcomponent