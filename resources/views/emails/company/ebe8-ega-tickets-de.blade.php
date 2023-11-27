@component('mail::message')

# Hello {{ array_get($profile, "fname") }},

Wir freuen uns, die nächste Ausgabe unserer exklusiven Networking-Party am 21. Februar in Berlin ankündigen zu können und haben einige aufregende Neuigkeiten anlässlich der **Black Week** für Dich.

Die **Networking-Party** ist ein fester Programmpunkt der beliebten [E-Commerce Germany Awards](https://ecommercegermanyawards.com?utm_source=email&utm_medium=email&utm_campaign=exhibitors_system_ega).

Hier haben natürlich die Aussteller die exklusive Möglichkeit dabei zu sein. Doch das ist noch nicht alles: während der Black Week kann man sich die exklusiven Gala-Tickets zum günstigen Preis von **nur 90 Euro** sichern (30 Euro Rabatt auf den regulären Preis). Beeile Dich, da die Anzahl der Tickets begrenzt ist!

@component('mail::button', ['url' => $accountUrlVouchers])
Kauf dein Ticket hier
@endcomponent

Verpasst nicht die Chance! Das Angebot gilt nur **vom 27. November bis zum 1. Dezember (16 Uhr)**.

Bei Fragen stehe ich gerne zur Verfügung.

Viele Grüße,

{{$footer}}

@endcomponent