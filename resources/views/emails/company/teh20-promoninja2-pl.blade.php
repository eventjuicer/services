

@component('mail::message')
 
# Cześć {{ array_get($profile, "fname") }},

Przypominamy o promocji swojego udziału w Targach eHandlu i konkursie dla Wystawców. 
Twoja aktywność w promowaniu swojego udziały to szansa na zdobycie korzyści, które nie są w sprzedaży.

**W czwartek planujemy uruchomić moduł przeglądania** i zapraszania - na spotkanie na stoisku - zarejestrowanych Uczestników. Przypominamy, że liczba zaproszeń uzależniona jest od liczby punktów w konkursie.

Biorąc pod uwagę sugestie od kilku Wystawców na temat tego, że aktualnie bardzo ciężko udostępnić przykładowe materiały promocyjne osobom, które nie mają dostępu do panelu Wystawcy (np z agencji PR) przygotowaliśmy zewnętrzny dedykowany - publiczny - serwis z materiałami dla Ciebie i bieżącym rankingiem.

@component('mail::button', ['url' => "https://promo.targiehandlu.pl/companies/" . array_get($company, "id")])
Ranking, materiały promocyjne i nagrody
@endcomponent


Pozdrawiam, 

Karolina Michalak

@endcomponent

