@component('mail::message')

Cześć {{ $p->translate("[[fname]]") }}!

## O 12:00 wystartowały zapisy na Warsztaty organizowane podczas nadchodzącej, jesiennej, edycji Targów eHandlu. Możesz zgłosić chęć udziału w aż 7 z 21 warsztatów.

@component('mail::button', ['url' => 'https://targiehandlu.pl/workshops'])
Zapisy
@endcomponent


@component('mail::panel')

Przypominamy, że jesienne Targi eHandlu odbędą się w piątek, **25 października, w EXPO XXI w Warszawie.**

Targi eHandlu to **4 sceny** z prezentacjami Ekspertów oraz **147 Wystawców** - oferentów usług i produktów wspierających handel w Internecie.

...**oraz 21 warsztatów**

@endcomponent

# Wybrane tematy Warsztatów

Nowe **Płatności Powtarzalne BLIK** i jak je wykorzystać w subskrypcjach ecommerce

Tylko 30 min dzieli Cię od własnego sklepu internetowego. **Konfiguracja LIVE**

Zwiększ konwersję przed **Black Friday dzięki BNPL!** Skuteczne strategie wdrożenia i promocji odroczonych płatności

Jak prowadzić **duże konto Allegro** - praktyczne przykłady

**Customer Journey** - Niesamowite przygody klienta w Krainie e-commerce

Jak wyprzedzić 99% sprzedawców na Allegro?

**SMS i RCS:** Jak wspólnie kształtują nową erę komunikacji mobilnej


[Lista wszystkich warsztatów i zapisy](https://targiehandlu.pl/workshops)


## Zasady 

**Udział** w Warsztatch w tej edycji jest **bezpłatny.**

Akceptacja zgłoszeń przez Prowadzących rozpocznie się 16 października.

Otrzymasz wiadomość zwrotną przy akceptacji.

Każdy Uczestnik Warsztatów **otrzymuje status VIP** (dostęp do Strefy VIP dla Wystawców i Prelegentów)

Czas warsztatu to maksymalnie **45 minut** (30min + 15min na Q&A)

@component('mail::button', ['url' => 'https://targiehandlu.pl/workshops'])
Sprawdź listę Warsztatów i zapisz się
@endcomponent



**Niezależnie od warsztatów [dostępne są aż 4 sceny prezentacyjne](https://targiehandlu.pl/visit)** (udział bezpłatny, otwarty, wymagana rejestracja jako Zwiedzający)



Pozdrawiamy,

Zespół Targów eHandlu


@endcomponent

