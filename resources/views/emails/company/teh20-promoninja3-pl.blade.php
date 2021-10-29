

@component('mail::message')
 
# Cześć {{ array_get($profile, "fname") }},

Przypominamy o promocji swojego udziału w Targach eHandlu i przy okazji możliwości pozyskania dodatkowych korzyści.

Walka trwa ale jeszcze wszystko może się zmienić (oprócz przyznania logotypu na identyfikatorach co uczynimy w poniedziałek, konkurs trwa do 18 października)

## Aktualny ranking to:

Futuriti - 233 pkt

Magazyn Marketer+ - 208 pkt

EasyStorage - 181 punktów

InSolutions - 113 pkt

webmetric - 110 pkt


**Punkty to odsłony Twojego profilu Wystawcy na witrynie Targów eHandlu.** 

Jeśli posiadasz rozwinięty **profil na serwisie społecznościowym** lub **bazę newsletterową kontrahentów** bardzo szybko możesz zostać liderem rankingu i zebrać dodatkowe nagrody (logotyp na identyfikatorach Zwiedzających, możliwość ustawienia roll-upu w strefie cateringu, wywiad video i wiele innych.)


@component('mail::button', ['url' => "https://promo.targiehandlu.pl/companies/" .$company_id])
Ranking, materiały promocyjne i nagrody
@endcomponent


Pozdrawiam, 

Karolina Michalak

@endcomponent

