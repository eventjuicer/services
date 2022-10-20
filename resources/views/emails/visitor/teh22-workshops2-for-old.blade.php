@component('mail::message')

Cześć {{ $p->translate("[[fname]]") }}!

## Wystartowały zgłoszenia na Warsztaty Targów eHandlu. 

Mamy już 848 zgłoszenia a przyznano 38 miejsc z 350 dostępnych.

[Sprawdź listę Warsztatów i zgłoś się](https://targiehandlu.pl/workshops)

## Tematy

**E-paragony w e-commerce.** Jak to działa i dlaczego się opłaca?

**Idealna kampania PLA** dla E-commerce. Jak ją zbudować?

**Alibaba.com** to nie bajka! Poznaj tajniki sprzedaży na tej platformie

**Jak zmniejszyć ilość zwrotów konsumenckich w branży Fashion?**

Migruj, zarządzaj, integruj i **sprzedawaj na wielu marketplace'ach** używając jednego narzędzia.

**Budżet marketingowy na Allegro**

**Zmiana platformy eCommerce od A do Z** - jak skutecznie przeprowadzić migrację sklepu na inny silnik

Jak wybrać **rynki dla cross-border e-commerce**?

Kompleksowa **automatyzacja sprzedaży wielokanałowej** - poznaj autorski **system IDEA** commerce od środka 

Jak w praktyce wdrożyć narzędzie do **marketing automation user.com**?

Jak wycisnąć więcej z **email marketingu z GetResponse**?

**AI i Big Data w praktyce via samba.ai** jak wykorzystać zgromadzone w ecommerce dane do zwiększenia liczby powracających klientów.

**Data-driven UX design** - jak maksymalizować ROI platformy ecommerce

**Twój esklep w fulfilmencie** - praktyczne strony wdrożenia i współpracy z operatorem logistycznym

[Sprawdź listę Warsztatów i zgłoś się](https://targiehandlu.pl/workshops)


## Ważne informacje:

Prowadzący Warsztaty dostali prośbę by akceptować **nie więcej niż 7 zgłoszeń dziennie** (by dać każdemu szansę). Otrzymasz wiadomość przy akceptacji lub odmowie Twojego udziału.

**Możesz się zgłosić do maksymalnie 2 warsztatów** (jeśli otrzymasz odmowę/odmowy udziału Twój limit się odnowi)

**Udział** w Warsztatch w tej edycji jest **bezpłatny.**

Każdy Uczestnik Warsztatów **otrzymuje status VIP** (dostęp do Strefy VIP dla Wystawców i Prelegentów)

W 1 Warsztacie może uczestniczyć **max 25 osób** i nie zwiększymy tego limitu.

Czas warsztatu to maksymalnie **45 minut** (30min + 15min na Q&A)

**Niezależnie od warsztatów [dostępne są aż 4 sceny prezentacyjne](https://targiehandlu.pl/schedule)** (udział bezpłatny, otwarty)


@component('mail::panel')

Przypominamy, że 22. Targi eHandlu odbędą się **27 października w EXPO XXI w Warszawie.**

Targi eHandlu to **4 sceny** z prezentacjami Ekspertów oraz **140 Wystawców** - oferentów usług i produktów wspierających handel w Internecie.

...**oraz 14 warsztatów**

@endcomponent

**Niezależnie od warsztatów [dostępne są aż 4 sceny prezentacyjne](https://targiehandlu.pl/visit)** (udział bezpłatny, otwarty, wymagana rejestracja jako Zwiedzający)


@component('mail::button', ['url' => 'https://targiehandlu.pl/visit'])
Zarejestruj się jako Zwiedzający
@endcomponent




Pozdrawiamy,

Karolina Michalak

Adam Zygadlewicz

**[Konfiguracja newslettera]({{ $unsubscribe }})**


@endcomponent