@component('mail::message')

Cześć {{ $p->translate("[[fname]]") }}!

## Wystartowały zgłoszenia na 21 Warsztatów Targów eHandlu. 

Mamy tylko 525 miejsc.

[Sprawdź listę Warsztatów i zgłoś się](https://targiehandlu.pl/workshops)

## Wybrane tematy

DLACZEGO teraz warto **sprzedawać do Wielkiej Brytanii** i JAK to robić ?

Najwyższy czas na **e-paragony.**

Zwiększ sprzedaż w e-sklepie dzięki **przejęciu kontroli nad procesami post-checkout**

Zaprojektuj **pulpit managera e-commerce** z pomocą systemu ERP nowej generacji!

**Budżet marketingowy na Allegro**

**Komunikacja mobile push** - od wdrożenia do konwersji

Jak za pomocą **customer journey map** zwiększyć sprzedaż w Twoim e-commerce?

**Rodzaje akcji promocyjnych** – którą kiedy zastosować, by osiągnąć pożądany efekt i jak ją niedrogo wdrożyć?

Szybki **audyt działań email marketingowych**

@component('mail::button', ['url' => 'https://targiehandlu.pl/workshops'])
Lista warsztatów, zgłoszenia
@endcomponent


## Ważne informacje:

Prowadzący Warsztaty dostali prośbę by akceptować **nie więcej niż kilka zgłoszeń dziennie** (by dać każdemu szansę). Otrzymasz wiadomość zwrotną przy akceptacji lub przekroczeniu czasu na akceptację zgłoszenia.

**Możesz się zgłosić do maksymalnie 2 warsztatów** (w przypadku "uwolnienia" zgłoszenia przez brak reakcji ze strony Prowadzącego - limit się odnowi)

**Udział** w Warsztatch w tej edycji jest **bezpłatny.**

Każdy Uczestnik Warsztatów **otrzymuje status VIP** (dostęp do Strefy VIP dla Wystawców i Prelegentów)

W 1 Warsztacie może uczestniczyć **max 25 osób** i nie zwiększymy tego limitu.

Czas warsztatu to maksymalnie **45 minut** (30min + 15min na Q&A)

**Niezależnie od warsztatów [dostępne są aż 4 sceny prezentacyjne](https://targiehandlu.pl/schedule)** (udział bezpłatny, otwarty)


@component('mail::panel')

Przypominamy, że 23. Targi eHandlu odbędą się **6 kwietnia w EXPO XXI w Warszawie.**

Targi eHandlu to **4 sceny** z prezentacjami Ekspertów oraz **140 Wystawców** - oferentów usług i produktów wspierających handel w Internecie.

...**oraz 21 warsztatów**

@endcomponent


**Niezależnie od warsztatów [dostępne są aż 4 sceny prezentacyjne](https://targiehandlu.pl/visit)** (udział bezpłatny, otwarty, wymagana rejestracja jako Zwiedzający)





Pozdrawiamy,

Karolina Michalak

Karolina Wojtas

Adam Zygadlewicz

**[Konfiguracja newslettera]({{ $unsubscribe }})**


@endcomponent

