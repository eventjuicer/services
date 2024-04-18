@component('mail::message')
 
# Cześć {{ array_get($profile, "fname")  }},

Oto plan dotyczący startu sprzedaży powierzchni wystawienniczej na 26. Targi eHandlu (25 października 2024 w Warszawie - EXPO XXI)

# Od dzisiaj do wtorku - Sprzedaż większych powierzchni 

Sprzedaż dla Wystawców jesiennych Targów eHandlu zainteresowanych większą przestrzenią (3 i więcej stoisk) 

[Układ hali, ceny](https://targiehandlu.pl/exhibit)

**Prośba o info zwrotne jeśli taką przestrzenią zainteresowana jest Twoja firma**

@component('mail::panel')

# Środa - 24 kwietnia 11:00

Start sprzedaży dla Twojej firmy (Wystawców spoza grona Top30 rankingu Konkursu dla Wystawców poprzedniej edycji Targów); Start otwartej sprzedaży.

@endcomponent

Pozdrowienia, 

{{$footer}}

@endcomponent

