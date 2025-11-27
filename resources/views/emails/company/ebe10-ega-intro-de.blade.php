@component('mail::message')
 
# Hallo {{ array_get($profile, "fname") }},

Wir bringen frischen Schwung nach Messe Berlin! Neues Venue, neue Vibes und ein komplett überarbeitetes Afterparty-Format, das du auf keinen Fall verpassen solltest. Die Party startet am Abend des ersten Messetages – der perfekte Ausklang nach einem Tag voller Business-Gespräche, Networking und Deal-Making. Schnapp dir einen Drink, triff Kolleg:innen, lerne neue Gesichter kennen und lass dich von Musik, Lachen und der lebhaften Atmosphäre für den Rest der Expo aufladen.

Das erwartet dich:

- Eine lebendige Party direkt nach dem ersten Expo-Tag
- Drinks, Snacks und eine gut bestückte Bar
- DJ, Musik und ausgelassene Stimmung
- Partner-Activation-Zonen
- Treffen mit Kolleg:innen aus der Branche: Marken, Händler, Shops, Dienstleister, Medien – die gesamte E-Commerce-Community an einem Ort

Für Aussteller gibt es ein exklusives Angebot: Early-Bird-Tickets für 99 EUR bis Ende des Jahres. Danach steigt der Preis. Jede Firma kann bis zu 4 Tickets sichern, nach dem Prinzip „first come, first served“.

@component('mail::button', ['url' => $accountUrlVouchers])
Hier Ticket kaufen
@endcomponent

Verpasse nicht diese spannende Nacht voller Networking und Feierlaune! Bei Fragen kannst du dich jederzeit bei uns melden.

Viele Grüße,

{{$footer}}

@endcomponent
