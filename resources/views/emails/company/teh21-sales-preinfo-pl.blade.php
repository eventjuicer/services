

@component('mail::message')
 
# Cześć {{$profile->translate("[[fname]]")}},

18 listopada (w czwartek) ruszy sprzedaż na kolejną edycję Targów eHandlu (Warszawa; 14 kwietnia 2022)

@component('mail::button', ['url' => "https://res.cloudinary.com/eventjuicer/image/upload/v1636543915/teh21_hall_layout1.png"])
Zobacz WSTĘPNY układ hali targowej
@endcomponent

Szczegółowe informacje (finalny układ hali, ceny) prześlemy na początku kolejnego tygodnia.

pozdrawiamy,

Karolina Michalak

Adam Zygadlewicz

@endcomponent



