

@component('mail::message')
 
# Cześć {{ array_get($profile, "fname")  }},

# Opublikowaliśmy ranking zaangażowania Wystawców w promocję swojego udziału w Targach eHandlu.

@component('mail::panel')
Wszystkim, którzy traktują ten element współpracy z nami poważnie BARDZO serdecznie dziękujemy.
@endcomponent

@component('mail::button', ['url' => $accountUrlRanking])
Sprawdź pozycję i nagrody
@endcomponent


## TOP Rankingu to:

Grupa Marketer 97 pkt

EasyStorage 90 pkt

Satisfly 37 pkt 

Gonito 34 pkt 

Idea commerce 28 pkt 

WhitePress 25 pkt

DHL 21 pkt

Dzięki!


Promocja swojego udziału to nie tylko większa liczba Zwiedzających - **zaangażowanie nagradzamy** dodatkowymi świadczeniami, które nie są do kupienia.

@component('mail::panel')

## Nagrody to:

**Wywiad video z Marcinem Rudzikiem, Twórcą video "Merytorycznie o E-commerce"**

**Pierwszeństwo** w zakupie przestrzeni wystawienniczej (tym samym niższe ceny)

**Dodatkowe zaproszenia w panelu** do zapraszania Zwiedzających

**Logotyp firmy na stronie głównej Targów eHandlu** aż do kolejnej edycji Targów.

**Możliwość ustawienia roll-upu* na Hali (np w strefie cateringu...)
@endcomponent

@component('mail::button', ['url' => $accountUrlRanking])
Sprawdź pozycję i nagrody
@endcomponent

## Jak generować punkty?

Panel Wystawcy -> Materiały promocyjne (najlepiej wyślij tę stronę osobie zajmującej się marketingiem w firmie :-)


Regards, 

{{$footer}}

@endcomponent

