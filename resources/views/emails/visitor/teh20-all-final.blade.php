

@component('mail::message')
 
# Dzień dobry {{ $p->translate("[[fname]]") }},

20 Targi eHandlu już w przyszłym tygodniu!

# 20 października, Warszawa, EXPO XXI 


Opublikowaliśmy pełną agendę 6 scen. Szykuje się mocne wydarzenie!

@component('mail::button', ['url' => "https://targiehandlu.pl/schedule?fname=" . $p->translate("[[fname]]") . "&lname=" . $p->translate("[[lname]]") . "&cname2=" . $p->translate("[[cname2]]") . "&position=" . $p->translate("[[position]]")."&email=".$p->translate("[[email]]")])
Zobacz pełną agendę
@endcomponent

(pod agendą jest formularz do szybkiej rejestracji)

Targi eHandlu to nie tylko 7 godzin wystąpień! ...to także **unikatowa  możliwość poznania prawie całej panoramy usług i produktów** wspomagających prowadzenie skutecznej sprzedaży online odwiedzając stoiska wystawiennicze! **mamy już ponad 130 Wystawców (1/3 z nich wcześniej nie wystawiała się na Targach eHandlu)** 

Widzimy się w środę?

Z pozdrowieniami,

Karolina Michalak

Adam Zygadlewicz

**[Konfiguracja newslettera]({{ $unsubscribe }})**

@endcomponent









