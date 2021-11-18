

@component('mail::message')
 
# Cześć {{ array_get($profile, "fname") }},

Przypominamy, że **DZISIAJ - o godzinie 10:00** - startuje sprzedaż Early Bird **dla TOP30 Rankingu Konkursu dla Wystawców** czyli dla Twojej firmy.

@component('mail::button', ['url' => "https://targiehandlu.pl/top30erlbrd2k04thc"])
REZERWACJA TYLKO POD TYM ADRESEM
@endcomponent

W stosunku do poprzednich edycji zmieniliśmy konwencję sprzedaży - kolejna pula stoisk będzie uruchamiana automatycznie po wyczerpaniu poprzedniej. W każdej puli znajduje się zaledwie kilka stoisk.


pozdrawiamy,

Karolina Michalak

Adam Zygadlewicz

@endcomponent



