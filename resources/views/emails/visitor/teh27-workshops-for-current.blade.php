@component('mail::message')

Cześć {{ $p->translate("[[fname]]") }}!

## Wystartowały właśnie zapisy na Warsztaty organizowane podczas nadchodzącej - ostatniej w tej formule - edycji Targów eHandlu. Możesz zgłosić chęć udziału w aż 7 z 21 warsztatów.

@component('mail::button', ['url' => 'https://targiehandlu.pl/workshops'])
Zapisy
@endcomponent


@component('mail::panel')

Przypominamy, że wiosenne Targi eHandlu odbędą się w czwartek, **3 kwietnia, w EXPO XXI w Warszawie.**

Targi eHandlu to **4 sceny** z prezentacjami Ekspertów oraz **127 Wystawców** - oferentów usług i produktów wspierających handel w Internecie.

...**oraz 21 warsztatów**

@endcomponent

  

## Wybrane tematy

**Psychologia cen** i przedstawianie promocji w praktyce – szkolenie interaktywne

Jak z pomocą **AI** przygotować specyfikację nowej funkcjonalności do platformy e-commerce? Praktyczne przykłady na bazie modułów do PrestaShop.

Zobacz, jak **Core Web Vitals** może przełożyć się na sukces Twojego sklepu!

Porzucona intencja zakupowa – jak odzyskać klientów, zanim sami zapomną, że chcieli kupić?

**Pricing w e-commerce.** Jak ustalać ceny, monitorować rynek i zwiększać konkurencyjność

Milion złotych w kieszeni: Matematyka dobrego CX w B2B


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



**Niezależnie od warsztatów [dostępne są aż 4 sceny prezentacyjne](https://ecwe.pl/schedule)** (udział bezpłatny, otwarty, wymagana rejestracja jako Zwiedzający)




Pozdrawiamy,

Zespół Targów eHandlu


@endcomponent

