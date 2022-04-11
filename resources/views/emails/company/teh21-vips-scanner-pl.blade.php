

@component('mail::message')
 
# Cześć {{ array_get($profile, "fname")  }},

W koncie wystawcy dostępne są 2 dodatkowe opcje.

## Zaproś swoich VIP do Strefy VIP na Targach. 

Strefa VIP to miejsce do komfortowych rozmów Prelegentów, Wystawców, Zwiedzających którzy przyjęli zaproszenie na spotkanie oraz **gości których zaprosisz przez panel Wystawcy.**.

(Każdy Przedstawiciel Wystawcy ma dostęp do Strefy VIP - nie wykorzystuj kodów do tego celu.)

@component('mail::button', ['url' => $accountUrlVips])
Zaproszenia VIP dla Klientów
@endcomponent

(Jeśli potrzebujesz więcej zaproszeń - odezwij się do nas.)

## Skanowanie Zwiedzających

Dane kontaktowe Zwiedzających odwiedzających stoisko Twojej firmy **może pozyskiwać każdy reprezentant firmy posiadający smartfona.**. Wystarczy smartfon.

**Firmy, które biorą udział w konkursie i mają min 20 pkt otrzymają eksport danych kontaktowych bez ograniczeń.**

@component('mail::button', ['url' => $accountUrlBadgescanner])
Instrukcja skanowania
@endcomponent

Regards, 

{{$footer}}

@endcomponent

