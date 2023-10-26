@component('mail::message')

# Cześć {{ $p->translate("[[fname]]") }}!

Już jutro widzimy się na Targach eHandlu w EXPO XXI.

@component('mail::panel')

Nasz system wskazuje, że masz umówione spotkania i/lub warszataty.

@component('mail::button', ['url' => "https://targiehandlu.pl/todo/".$p->email])
LISTA ZADAŃ
@endcomponent

@endcomponent



Pozdrawiamy,

Aleksandra, Karolina & Karolina


@endcomponent