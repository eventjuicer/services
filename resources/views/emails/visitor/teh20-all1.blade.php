

@component('mail::message')
 
# Dzień dobry {{ $p->translate("[[fname]]") }},

**Najstarsze i największe wydarzenie w Polsce - dotyczące sprzedaży online - powraca po blisko 2 latach (dokładnie: trzech - odwołanych przez Rząd - edycjach).**

Po tak długim czasie od ostatniej - fizycznej - edycji Targów (Warszawa - 22 października 2019), pracując teraz nad jubileuszową edycją, towarzyszą nam emocje, które mieliśmy organizujać protoplastę Targów eHandlu czyli ogólnopolskie, otwarte, spotkania branży ehandlu - Shopcamp. ...ten motywujący dreszczyk emocji przy podejmowaniu każdej decyzji. 

Nie możemy się doczekać wejścia do hali targowej! :)

Formuła jesiennych Targów eHandlu będzie jednak niezmienna: 

- ok **120-130 Wystawców** (kończymy kompletować listę - **zostało ok 11 stoisk**)

- aż **6 scen prezentacyjnych** (2 duże, 2 otwarte, 2 "studyjne" pod tematy szkoleniowe) w których będziemy realizowali różne formuły edukacji

- strefa VIP (do której wejście będą mieli wybrani nie tylko Wystawcy i Prelegenci ale także wybrani przez nas Zwiedzający reprezentujący największych e-retailerów)

To co możesz zrobić na ten moment:

### Tylko do piątku przyjmujemy propozycje wystąpień. Chcesz opowiedzieć o czym co jest interesujące dla właścicieli sklepów? Zgłoś się - to nic nie kosztuje.

@component('mail::button', ['url' => "https://targiehandlu.pl/speaking"])
Wystąp / Zgłoś propozycję prezentacji
@endcomponent

### Jesteś dostawcą usług dla sprzedających w Internecie? Ostatnie przestrzenie wystawiennicze czekają na Ciebie.

@component('mail::button', ['url' => "https://targiehandlu.pl/exhibit"])
Zobacz plan stoisk / Wystawców
@endcomponent


<a href="https://targiehandlu.pl/exhibit"><img src="https://res.cloudinary.com/eventjuicer/image/upload/v1630408049/emails/teh20_bookingmap.png" alt="booking map" style="max-width: 600px;"></a>

### Zarejestruj się jako Uczestnik (nie planujemy wprowadzenia opłaty lecz szczegółowe warunki - sanitarne - udziału będą znane bezpośrednio przed Targami)

@component('mail::button', ['url' => "https://targiehandlu.pl/visit"])
Zarejestruj się jako Zwiedzający
@endcomponent


<a href="https://targiehandlu.pl/speaking"><img src="https://res.cloudinary.com/eventjuicer/image/upload/v1630408054/emails/teh20_stage2.jpg" alt="stage" style="max-width: 600px;"></a>

<a href="https://targiehandlu.pl/speaking"><img src="https://res.cloudinary.com/eventjuicer/image/upload/v1630408050/emails/teh20_stage1.jpg" alt="stage" style="max-width: 600px;"></a>




Z pozdrowieniami,

Karolina Michalak

Adam Zygadlewicz


**[Konfiguracja newslettera]({{ $unsubscribe }})**

@endcomponent









