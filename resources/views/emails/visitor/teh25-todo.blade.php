@component('mail::message')

# Cześć {{ $p->translate("[[fname]]") }}!

Już **w czwartek** widzimy się na Targach eHandlu w EXPO XXI w Warszawie.

Wejście od 10:00. Start scen prezentacyjnych 10:40. 

@component('mail::panel')

Nasz system wskazuje, że masz umówione spotkania i/lub warszataty.

@component('mail::button', ['url' => "https://targiehandlu.pl/todo/".$p->email])
LISTA ZADAŃ
@endcomponent

@endcomponent



Pozdrawiamy,

Aleksandra, Karolina & Karolina


@endcomponent