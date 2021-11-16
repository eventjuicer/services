

@component('mail::message')
 
# Cześć {{ array_get($profile, "fname") }},

**W czwartek 18 listopada** o godzinie **12:00** startuje sprzedaż Early Bird dla Wystawców poprzedniej edycji Targów eHandlu.

@component('mail::button', ['url' => "https://targiehandlu.pl/exhibit"])
Rezerwacja Early Bird 
@endcomponent

(Ceny, kategorie stoisk są podawane orientacyjne - mogą jeszcze ulec zmianie)

W stosunku do poprzednich edycji zmieniliśmy konwencję sprzedaży - kolejna pula stoisk będzie uruchamiana automatycznie po wyczerpaniu poprzedniej. W każdej puli znajduje się zaledwie kilka stoisk.


pozdrawiamy,


Karolina Michalak

Adam Zygadlewicz

@endcomponent



