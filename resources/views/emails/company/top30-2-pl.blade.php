

@component('mail::message')
 
# Cześć {{$profile->translate("[[fname]]")}},

DZISIAJ **5 grudnia** o godzinie **10:00** startuje sprzedaż Early Bird **dla TOP30 Rankingu Konkursu dla Wystawców** czyli dla Twojej firmy.

Rezerwacji będzie można dokonać **do godziny 11:30** (O 12:00 startuje sprzedaż dla pozostałych Wystawców, tj spoza TOP30)

@component('mail::button', ['url' => "https://targiehandlu.pl/teh16top30erlbrd"])
Rezerwacja tyko tutaj
@endcomponent

**O 10:00 musisz korzystać z powyższej strony. Rezerwacja przez stronę główną nie będzie możliwa**.

Pozdrawiam, Adam Zygadlewicz

@endcomponent



