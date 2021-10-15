@component('mail::message')

# Cześć {{$p->translate("[[fname]]") }} 

Twój bilet na 20 Targi eHandlu w Warszawie jest gotowy do pobrania i druku.

@component('mail::button', ['url' => $url])
Pobierz bilet
@endcomponent

**Jeśli nie możesz uczestniczyć w Targach - proszę zaznacz to na stronie pobierania biletu**

{{$p->translate("[[fname]]") }}, na stronie z biletem znajdują się przyciski do pochwalenia się na Facebook, Twitter i Linkedin, że będziesz na Targach. **Podczas tej edycji szczególnie zależy nam na promocji - mamy aż 6 scen i ogromną halę targową** więc zachęcamy do użycia choćby jednego przycisku.

Prosimy o wypełnienie ankiety dot. Twojego stanu zdrowia - https://forms.gle/nwQwXvZZ9JeQ697v6

Przypominamy, że Targi odbędą się **20 października (to środa!) w Warszawie** na EXPO XXI / Hala 1

Do zobaczenia! 

Karolina Michalak

PS: Na stronie z biletem znajduje się także **szczegółowa agenda prezentacji na wszystkich 6 scenach** 

PS2:  Pamiętaj, że **jeśli nie masz możliwości wydrukowania biletu** - NIE MA PROBLEMU! **Wydrukujemy go Tobie na miejscu**

@endcomponent