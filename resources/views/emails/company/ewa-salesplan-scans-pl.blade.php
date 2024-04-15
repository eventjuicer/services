@component('mail::message')
 
# Cześć {{ array_get($profile, "fname")  }},

Potargowy tydzień zaczynamy od 3 tematów :)

## Skany

Jeśli Przedstawiciele Twojej firmy skanowali identyfikatory Zwiedzających podczas czwartkowych Targów - prosimy o pilne pobranie listy z danymi kontaktowymi z panelu.

@component('mail::button', ['url' => $accountUrlScans])
Dane kontaktowe z zeskanowanych identyfikatorów Zwiedzających 
@endcomponent

## Ankieta

Jeśli jeszcze nie mamy wypełnionej przez Ciebie ankiety dotyczącej udziału w minionych Targach - prosimy o poświęcenie kilku chwil.

@component('mail::button', ['url' => "https://forms.gle/s5QcrV486ZV3xsEM6"])
Wypełnij ankietę satysfakcji
@endcomponent

## Sprzedaż stoisk na kolejną edycję Targów.

Jesienne Targi eHandlu odbędą się 25 października 2024 na EXPO XXI.

Hurtowa sprzedaż stoisk (min. 3 stoiska) ruszy w najbliższy czwartek - 18 kwietnia.

**Sprzedaż dla TOP30 Konkursu** dla Wystawców **23 kwietnia (wtorek)**

**Early-bird** (dla pozostałych Wystawców) + sprzedaż otwarta - **24 kwietnia (środa)**

(Jeśli nie pamiętasz swojego miejsca w rankingu Konkursu dla Wystawców, w czwartek otrzymasz od nas informację kiedy odbędzie się sprzedaż konkretnie dla Twojej firmy)


Regards, 

{{$footer}}

@endcomponent

