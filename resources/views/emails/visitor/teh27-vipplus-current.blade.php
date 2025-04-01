@component('mail::message')

Cześć {{ $p->translate("[[fname]]") }}!

Przypominamy że już w czwartek, w Warszawie, ostatnie Targi eHandlu w znanej od wielu lat formule... na jesień planujemy kosmiczne wręcz zmiany!

Jedna ze zmian ma premierę właśnie teraz...<strong>i jest ograniczona dla pierwszych 50 osób.</strong>

## Uzyskaj nielimitowane wejście na wszystkie Warsztaty (> 20), Strefy VIP oraz.... 

najlepiej sprawdź to na stronie pakietu VIP Plus :)

@component('mail::button', ['url' => '{{$eventAppUrl}}?goto=/vipplus'])
Zapoznaj się z VIPem Plus
@endcomponent


## Wybrane warsztaty (w ramach VIP Plus udział nielimitowany)

**Psychologia cen** i przedstawianie promocji w praktyce – szkolenie interaktywne

Jak z pomocą **AI** przygotować specyfikację nowej funkcjonalności do platformy e-commerce? Praktyczne przykłady na bazie modułów do PrestaShop.

Zobacz, jak **Core Web Vitals** może przełożyć się na sukces Twojego sklepu!

Porzucona intencja zakupowa – jak odzyskać klientów, zanim sami zapomną, że chcieli kupić?

**Pricing w e-commerce.** Jak ustalać ceny, monitorować rynek i zwiększać konkurencyjność

Milion złotych w kieszeni: Matematyka dobrego CX w B2B

[Lista wszystkich warsztatów]({{$eventAppUrl}}?goto=/schedule?tab=workshops)



@component('mail::panel')

Przypominamy, że wiosenne Targi eHandlu odbędą się w czwartek, **3 kwietnia, w EXPO XXI w Warszawie.**

Targi eHandlu to **4 sceny** z prezentacjami Ekspertów oraz **120 Wystawców** - oferentów usług i produktów wspierających handel w Internecie.

...w czwartek o 15:00 zapraszamy do wzniesienia wspólnego toastu za minione 14 lat i za powodzenie zmian, które planujemy wdrożyć na jesienną edycję E-commerce Warsaw Expo.

@endcomponent



Już teraz możesz korzystać z nowego narzędzia do planowania swojego dnia na targach, nawiązać kontakt przed dniem targowym ...a także automagicznie wymieniać dane kontaktowe skanując identyfikator innego zwiedzającego podczas Targów.

<image src="https://res.cloudinary.com/eventjuicer/image/upload/f_auto,w_700,c_fit/v1742988591/app/shots_ecwe.png" alt="" width="700" style="max-width: 700px;"/>

@component('mail::button', ['url' => '{{$eventAppUrl}}?goto=/vipplus'])
Logowanie do aplikacji
@endcomponent



Pozdrawiamy,

Zespół E-commerce Warsaw Expo / Targów eHandlu


@endcomponent

