@component('mail::message')

Cześć {{ $p->translate("[[fname]]") }}!

## Od wczoraj można zgłosić chęć udziału w 7 z 20 Warsztatów, które odbędą się 11 kwietnia, podczas wiosennych Targów eHandlu.

@component('mail::panel')

Prowadzący warsztaty właśnie przeglądają i akceptują zgłoszenia - jest to ostatni moment na wysłanie swojej kandydatury.

@endcomponent

@component('mail::button', ['url' => 'https://targiehandlu.pl/workshops'])
Zapisy
@endcomponent


## Wybrane tematy

**5 trików top sprzedawców na Allegro**

Jak zbudować **politykę zwrotów** dopasowaną do swojego sklepu?

**OTTO.de & BOL.com** - jak pokonać barierę wejścia i wyprzedzić konkurencję. Aspekty prawne i logistyczne

**Migracja** na inną platformę e-commerce - po czym poznasz, że nadszedł na nią czas?

8 rzeczy, które możesz poprawić w swoim Porzuconym Koszyku – nieoczywiste prawdy o Marketing Automation

Jak **eparagony** zmienią Twój e-commerce? Wdrożenie w praktyce.



[Lista wszystkich warsztatów i zapisy](https://targiehandlu.pl/workshops)


## Zasady

**Udział** w Warsztatch w tej edycji jest **bezpłatny.**

Akceptacja zgłoszeń przez Prowadzących rozpocznie się 4 kwietnia.

Otrzymasz wiadomość zwrotną przy akceptacji.

Każdy Uczestnik Warsztatów **otrzymuje status VIP** (dostęp do Strefy VIP dla Wystawców i Prelegentów)

Czas warsztatu to maksymalnie **45 minut** (30min + 15min na Q&A)

@component('mail::button', ['url' => 'https://targiehandlu.pl/workshops'])
Sprawdź listę Warsztatów i zapisz się
@endcomponent


@component('mail::panel')

Przypominamy, że XXV Targi eHandlu odbędą się **11 kwietnia w EXPO XXI w Warszawie.**

Targi eHandlu to **4 sceny** z prezentacjami Ekspertów oraz **147 Wystawców** - oferentów usług i produktów wspierających handel w Internecie.

...**oraz 20 warsztatów**

@endcomponent


**Niezależnie od warsztatów [dostępne są aż 4 sceny prezentacyjne](https://targiehandlu.pl/visit)** (udział bezpłatny, otwarty, wymagana rejestracja jako Zwiedzający)



Pozdrawiamy,

Zespół Targów eHandlu


@endcomponent

