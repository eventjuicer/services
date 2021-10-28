

@component('mail::message')
 
# Cześć {{ array_get($profile, "fname") }},

## Mamy zdjęcia z minionej edycji Targów eHandlu


@component('mail::button', ['url' => "https://promo.targiehandlu.pl/companies/" .$company_id . "/photos"])
Pobierz zdjęcia
@endcomponent


Przypominamy o ankiecie podsumowującej Targi eHandlu - Twoje odpowiedzi bardzo nam się przydadzą podczas przygotowań do kolejnej edycji

@component('mail::button', ['url' => "https://docs.google.com/forms/d/e/1FAIpQLSc_4PlSs3dbEMq0MQngDq5-w1xztHyc-XALFQxtRDpZygsEsw/viewform?usp=sf_link"])
Ankieta
@endcomponent


Pozdrawiamy, 

Karolina Michalak

Adam Zygadlewicz

@endcomponent

