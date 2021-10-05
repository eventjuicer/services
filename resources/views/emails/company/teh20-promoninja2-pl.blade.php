

@component('mail::message')
 
# Cześć {{ array_get($profile, "fname") }},

Przypominamy o promocji swojego udziału w Targach eHandlu i tym samym udziale w konkursie. 
Twoja aktywność w promowaniu swojego udziału to szansa na zdobycie korzyści, które nie są w sprzedaży.

Przykład? 

**W czwartek planujemy uruchomić moduł przeglądania** i zapraszania - na spotkanie na stoisku - zarejestrowanych Uczestników. Przypominamy, że liczba zaproszeń będzie uzależniona od liczby punktów w konkursie.

(a to nie wszystko. dzięki zaangażowaniu możesz ustawić swój rollup w strefie cateringu czy mieć logotyp swojej firmy na 4000 identyfikatorów :-)

Biorąc pod uwagę sugestie od kilku Wystawców na temat tego, że aktualnie bardzo ciężko udostępnić przykładowe materiały promocyjne osobom, które nie mają dostępu do panelu Wystawcy (np z agencji PR) przygotowaliśmy zewnętrzny dedykowany - publiczny - serwis z materiałami dla Ciebie i bieżącym rankingiem.

@component('mail::button', ['url' => "https://promo.targiehandlu.pl/companies/" .$company_id])
Ranking, materiały promocyjne i nagrody
@endcomponent


Pozdrawiam, 

Karolina Michalak

@endcomponent

