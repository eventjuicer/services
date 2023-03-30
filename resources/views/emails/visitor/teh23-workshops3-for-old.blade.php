@component('mail::message')

Cześć {{ $p->translate("[[fname]]") }}!

## Czy widzimy się 6 kwietnia na EXPO XXI w Warszawie?

@component('mail::panel')

Targi eHandlu to **4 sceny** z **34 prezentacjami** Ekspertów oraz 

**140 Wystawców** - oferentów usług i produktów wspierających handel w Internecie.

...**oraz 21 warsztatów**

@endcomponent

## Pozostało jeszcze 117 miejsc na Warsztatach Targów eHandlu

(uwolniliśmy starsze/nierozstrzygnięte zgłoszenia)

@component('mail::button', ['url' => 'https://targiehandlu.pl/workshops'])
Zobacz listę warsztatów i zgłoś się
@endcomponent

**Nadal dostępne warsztaty**

Zwiększ sprzedaż w e-sklepie dzięki **przejęciu kontroli nad procesami post-checkout**

Standardowe i niestandardowe **techniki pozyskiwania linków**

Wystawiasz papierowe paragony do każdego zamówienia? To błąd. Najwyższy **czas na e-paragony.**

Jak wybrać **rynki dla cross-border e-commerce**?

**Jak negocjować najlepsze oferty z dostawcami usług kurierskich** w logistyce międzynarodowej?

Komunikacja **mobile push** - od wdrożenia do konwersji

Jak bezproblemowo przeprowadzić **integrację e-commerce z fulfillmentem?**

Zaprojektuj **pulpit managera e-commerce** z pomocą systemu ERP nowej generacji!

@component('mail::button', ['url' => 'https://targiehandlu.pl/workshops'])
Zobacz listę warsztatów i zgłoś się
@endcomponent

**Ważne informacje:**

Prowadzący Warsztaty dostali prośbę by akceptować **nie więcej niż kilka zgłoszeń dziennie** (by dać każdemu szansę). Otrzymasz wiadomość zwrotną przy akceptacji lub przekroczeniu czasu na akceptację zgłoszenia.

**Możesz się zgłosić do maksymalnie 2 warsztatów** (w przypadku "uwolnienia" zgłoszenia przez brak reakcji ze strony Prowadzącego - limit się odnowi)

**Udział** w Warsztatch w tej edycji jest **bezpłatny.**

Każdy Uczestnik Warsztatów **otrzymuje status VIP** (dostęp do Strefy VIP dla Wystawców i Prelegentów)

W 1 Warsztacie może uczestniczyć **max 25 osób** i nie zwiększymy tego limitu.

Czas warsztatu to maksymalnie **45 minut** (30min + 15min na Q&A)

**Niezależnie od warsztatów [dostępne są aż 4 sceny prezentacyjne](https://targiehandlu.pl/workshops)** (przewiń stronę :-)


@component('mail::button', ['url' => 'https://targiehandlu.pl/workshops'])
Zobacz listę warsztatów i zgłoś się
@endcomponent

Pozdrawiamy,

Zespół Targów eHandlu

**[Konfiguracja newslettera]({{ $unsubscribe }})**

@endcomponent