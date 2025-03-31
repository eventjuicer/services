@component('mail::message')
 
# Cześć {{ array_get($profile, "fname")  }},

**To już ostatni moment na wysyłkę zaproszeń VIP do Partnerów i Kontrahentów.**

(Wysłane ale niewykorzystane zaproszenia aktualizują limit; Limit (per Wystawca) zwiększony do 20)

**Zachęcamy do przeglądania listy zarejestrowanych zwiedzających i wysyłania zaproszeń do kontaktu** (zakładka "People", funkcja "Connect") celem nawiązania kontaktu, rozmowy na czacie i **pozyskania danych kontaktowych** jeszcze przed wydarzeniem.

(Codzinnie wysyłamy powiadomienia do Zwiędzających o czekających zaproszeniach; Limit zaproszeń (per Wystawca) zwiększony do 75)


@component('mail::button', ['url' => $eventAppUrlBusiness])
Szybkie logowanie do ecwe.pl/business
@endcomponent


Regards, 

{{$footer}}

@endcomponent

