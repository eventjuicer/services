@component('mail::message')

Cześć {{ $p->translate("[[fname]]") }}!

## Masz status VIP, który uprawnia do korzystania ze Strefy VIP w Hali 3.

W Strefie VIP będziesz mógł/mogła poznać Wystawców, Prelegentów oraz innych Zwiedzających VIP. 

Strefa VIP to również nielimitowany dostęp do bufetu kawowego.

**Jeśli nie pobrał-eś/-aś jeszcze swojego biletu VIP, pobierz go** pod linkiem poniżej (Prosimy o pobranie nawet jeśli nie masz możliwości wydrukowania.)

@component('mail::button', ['url' => $ticketUrl])
Potwierdź udział jako VIP / pobierz bilet VIP
@endcomponent

Jeśli uczestniczysz w Warsztatach lub masz umówione spotkania z Wystawcami - listę znajdziesz pod adresem [https://targiehandlu.pl/todo/{!! $p->email!!} ](https://targiehandlu.pl/todo/{!! $p->email!!} )


@component('mail::panel')

Przypominamy, że jesienne Targi eHandlu odbędą się w piątek, **25 października, w EXPO XXI w Warszawie.**

Targi eHandlu to **4 sceny** z prezentacjami Ekspertów oraz **150 Wystawców** - oferentów usług i produktów wspierających handel w Internecie.

@endcomponent


Pozdrawiamy,

Zespół Targów eHandlu


@endcomponent

