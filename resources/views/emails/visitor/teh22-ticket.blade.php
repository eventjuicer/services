@component('mail::message')

# Cześć {{$p->translate("[[fname]]") }} 

Twój bilet na 22 Targi eHandlu w Warszawie jest gotowy do pobrania i druku.

@component('mail::button', ['url' => $url])
Pobierz bilet
@endcomponent

**Pobierz go również wtedy gdy nie masz możliwości wydrukowania**

**Jeśli nie możesz uczestniczyć w Targach - proszę zaznacz to na stronie pobierania biletu**

{{$p->translate("[[fname]]") }}, na stronie z biletem znajdują się przyciski do pochwalenia się na Facebook, Twitter i Linkedin, że będziesz na Targach. 

Przypominamy, że Targi odbędą się **27 października (to czwartek!) w Warszawie** na EXPO XXI / Hala 1

Do zobaczenia! 

Karolina Michalak

PS: Na stronie z biletem znajduje się także **szczegółowa agenda prezentacji na wszystkich 4 scenach** 

PS2:  Pamiętaj, że **jeśli nie masz możliwości wydrukowania biletu** - NIE MA PROBLEMU! **Wydrukujemy go Tobie na miejscu** (ale prosimy o pobranie! :-)

@endcomponent