

@component('mail::message')

Cześć {{ $p->translate("[[fname]]") }}!

# Opublikowaliśmy [kompletną listę prezentacji na scenach A, B, C i D](https://targiehandlu.pl/visit).

(Lista prezentacji na scenach, które zostały dzisiaj opublikowane poniżej.)

Naszym zdaniem **agenda jest rewelacyjna! Sporo świeżości! ...a Ty co uwazasz? :)**

@component('mail::button', ['url' => 'https://targiehandlu.pl/visit'])
Zarejestruj się / Sprawdź agendę
@endcomponent

@component('mail::panel')

Przypominamy, że 22. Targi eHandlu odbędą się **27 października w EXPO XXI w Warszawie.**

Targi eHandlu to **4 sceny z prezentacjami Ekspertów** oraz **140 Wystawców** - oferentów usług i produktów wspierających handel w Internecie.

@endcomponent

# W przyszłym tygodniu ruszą zapisy na warsztaty (2 strefy warsztatowe, na każdej po 7 warsztatów.)


Oto część Agendy, którą właśnie opublikowaliśmy.

# Scena B

**InPost**

Środowisko InPost: **One Stop Shop services**

**Grupa Tense**

utsourcing a in-house. **OKtóre działania SEO outsourcować**, a które wykonywać samodzielnie?

**Przelewy24**

Nie śpię, bo dbam o konwersję! **Jak „wycisnąć" maksimum z dostawcy płatności,** by zwiększać sprzedaż w czasach kryzysu?

**FedEx**

**Jak upewnić się, że Twoja przesyłka jest gotowa do zagranicznej podróży?**

**Email Partners**

Wszystkie drogi prowadzą do… konwersji. **Mailing, display, retargeting** - z Twoim klientem #NaKażdymKroku!

**Trusted Shops Poland Sp. z o.o**

Nowe przepisy dotyczące prezentacji opinii i rabatów w e-sklepach. Sprawdź, **na co uważać po wejściu w życie dyrektywy Omnibus.**

**AtomStore**

**6 błędów w ekspansji zagranicznej** w e-commerce i jak ich uniknąć

**Omnipack**

**Logistyka w e-commerce na czas kryzysu** 6 wskazówek jak zabezpieczyć biznes.

**Ideo Force Sp. z o.o.**

Optymalizacja doświadczeń użytkowników w oparciu o dane – czyli **data driven UX**

@component('mail::button', ['url' => 'https://targiehandlu.pl/visit'])
Zarejestruj się / Sprawdź całą agendę
@endcomponent


# Scena C

**Segmentify**

**AI-driven Personalization**, czyli jak analityka i profilowanie klientów może wznieść Twój e-commerce na kolejny poziom.

**Tribe47**

Co po algorytmach? **Czas na kreatywną reklamę opartą na danych**

**cyber_Folks**

30 dni planowania kampanii po nocach i cały budżet w błoto? **Łatwe zmiany w sklepie, które wystrzelą Twoje konwersje w kosmos!**

**IDEA commerce S.A.**

**AI w e-commerce** - poznaj inteligentne rozwiązania dla biznesu online

**Nethansa**

Kijem Wisły nie zawrócisz- czyli **jak zautomatyzować strumień przychodów ze sprzedaży na Amazon i Kaufland.de**

**Outvio**

Ostatnia prosta w eCommerce: **Ujednolicona strategia po-checkoutowa**

**Sempai**

**SEO międzynarodowe. Optymalizacja sklepu pod wiele wersji językowych**

**Exorigo-Upos SA; Amica, GoldenGrid**

**Zaprojektowanie i wdrożenie nowego e-commerce Amica.pl. Jak to wyglądało "od kuchni"?**

**Live.Market**

**LiveCommerce - jak video zmienia oblicze sprzedaży online.**


@component('mail::button', ['url' => 'https://targiehandlu.pl/visit'])
Zarejestruj się / Sprawdź całą agendę
@endcomponent


Pozdrawiamy,

Karolina Michalak

Adam Zygadlewicz



**[Konfiguracja newslettera]({{ $unsubscribe }})**



@endcomponent