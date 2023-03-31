@component('mail::message')

# Cześć {{$p->translate("[[fname]]") }} 

Twój bilet na 23 Targi eHandlu w Warszawie jest gotowy do pobrania i druku.

@component('mail::button', ['url' => $url])
Pobierz bilet
@endcomponent

**Pobierz go również wtedy gdy nie masz możliwości wydrukowania ...pokażesz go w punkcie rejestracyjnym.**

**Jeśli nie możesz uczestniczyć w Targach - proszę zaznacz to na stronie pobierania biletu**

{{$p->translate("[[fname]]") }}, na stronie z biletem znajdują się przyciski do pochwalenia się na Facebook, Twitter i Linkedin, że będziesz na Targach. 

Przypominamy, że Targi odbędą się **6 kwietnia (to czwartek!) w Warszawie** na EXPO XXI / Hala 1

Do zobaczenia! 

Zespół Targów eHandlu

PS: Na stronie z biletem znajduje się także **szczegółowa agenda prezentacji na wszystkich 4 scenach** 

@endcomponent