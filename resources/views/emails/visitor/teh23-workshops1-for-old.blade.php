@component('mail::message')

Cześć {{ $p->translate("[[fname]]") }}!

## Po raz drugi na Targach eHandlu organizujemy Warsztaty. ...tym razem aż 21 Warsztatów

[Sprawdź listę planowanych Warsztatów](https://targiehandlu.pl/workshops)

**Wybrane tematy**

DLACZEGO teraz warto **sprzedawać do Wielkiej Brytanii** i JAK to robić ?

Najwyższy czas na **e-paragony.**

Zwiększ sprzedaż w e-sklepie dzięki **przejęciu kontroli nad procesami post-checkout**

Zaprojektuj **pulpit managera e-commerce** z pomocą systemu ERP nowej generacji!

**Budżet marketingowy na Allegro**

**Komunikacja mobile push** - od wdrożenia do konwersji

Jak za pomocą **customer journey map** zwiększyć sprzedaż w Twoim e-commerce?

**Rodzaje akcji promocyjnych** – którą kiedy zastosować, by osiągnąć pożądany efekt i jak ją niedrogo wdrożyć?

[Jak zrobić] Szybki **audyt działań email marketingowych**

## Ważne informacje:

**Udział** w Warsztatch w tej edycji będzie **bezpłatny.** lecz limitowany

**Zapisy** na warsztaty startują **we wtorek o 12:00.**

Będzie można zapisać się na **maksymalnie 2 warsztaty.**

**Prowadzący będzie musiał potwierdzić Twój udział** - otrzymasz powiadomienie jak tylko to nastąpi.

Każdy Uczestnik Warsztatów **otrzymuje status VIP** (dostęp do Strefy VIP dla Wystawców i Prelegentów)

W 1 Warsztacie może uczestniczyć **max 25 osób**

Czas warsztatu to maksymalnie **45 minut** (30min + 15min na Q&A)

**Niezależnie od warsztatów [dostępne są aż 4 sceny prezentacyjne](https://targiehandlu.pl/visit)** (udział bezpłatny, otwarty, wymagana rejestracja jako Zwiedzający)


@component('mail::button', ['url' => 'https://targiehandlu.pl/visit'])
Zarejestruj się jako Zwiedzający
@endcomponent

@component('mail::panel')

Przypominamy, że 23. Targi eHandlu odbędą się **6 kwietnia w EXPO XXI w Warszawie.**

Targi eHandlu to **4 sceny** z prezentacjami Ekspertów oraz **140 Wystawców** - oferentów usług i produktów wspierających handel w Internecie.

...**oraz 21 warsztatów**

@endcomponent

Pozdrawiamy,

Karolina Michalak

Karolina Wojtas

Adam Zygadlewicz

**[Konfiguracja newslettera]({{ $unsubscribe }})**


@endcomponent