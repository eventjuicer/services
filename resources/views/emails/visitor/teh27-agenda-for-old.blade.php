@component('mail::message')

Cześć {{ $p->translate("[[fname]]") }}!

## Już w czwartek, w Warszawie, ostatnie Targi eHandlu w znanej od wielu lat formule

Zapraszamy na **4 sceny prezentacyjne** i na **120 stoisk** firm-oferentów produktów i usług wspomagających cyfrową sprzedaż.

...a o 15:00 zapraszamy do wzniesienia wspólnego toastu za minione 14 lat i za powodzenie zmian, które planujemy wdrożyć na jesienną edycję E-commerce Warsaw Expo.

@component('mail::button', ['url' => 'https://ecwe.pl/join'])
Odbierz bilet za 0 zł
@endcomponent

Już teraz możesz korzystać z nowego narzędzia do planowania swojego dnia na targach, nawiązać kontakt przed dniem targowym ...a także automagicznie wymieniać dane kontaktowe skanując identyfikator innego zwiedzającego podczas Targów.

<image src="https://res.cloudinary.com/eventjuicer/image/upload/f_auto,w_700,c_fit/v1742988591/app/shots_ecwe.png" alt="" width="700" style="max-width: 700px;"/>

@component('mail::button', ['url' => 'https://ecwe.pl/join'])
Rejestracja + logowanie do aplikacji
@endcomponent

# Wybrane tematy prezentacji (wymagana rejestracja)

**ChatGPT** – jak stać się widocznym i sprzedawać więcej w wyszukiwarce AI-first?

Strategia Sukcesu: **55% wyższe przychody w czasie Black Week** rok do roku dzięki skutecznej strategii performance.

Co nowego w **Kaufland Global Marketplace?** Poznaj nowe funkcjonalności i dowiedz się jak rozpocząć sprzedaż na 5 europejskich rynkach

Jak opakować swoją wiedzę w produkt cyfrowy pozwalający zarabiać **na automacie powyżej 30 000 zł miesięcznie**?

[Szybka rejestracja](https://ecwe.pl/join)


@component('mail::panel')

Przypominamy, że wiosenne Targi eHandlu odbędą się w czwartek, **3 kwietnia, w EXPO XXI w Warszawie.**

Targi eHandlu to **4 sceny** z prezentacjami Ekspertów oraz **120 Wystawców** - oferentów usług i produktów wspierających handel w Internecie.

@endcomponent



Pozdrawiamy,

Zespół E-commerce Warsaw Expo / Targów eHandlu


@endcomponent

