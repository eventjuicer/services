

@component('mail::message')
 
# Cześć {{$profile->translate("[[fname]]")}},

**W Twoim Panelu Wystawcy udostępniliśmy kolejną edycję Wyzwania (Konkursu) dla Wystawców**

Ale o co chodzi?

@component('mail::panel')

 Część dodatkowych usług i świadczeń jest dostępna tylko dla Wystawców, którzy zapraszają swoich Klientów i Partnerów do odwiedzenia stoiska Twojej firmy na Targach. Wiekszość tych świadczen jest bardzo cenna i nie można ich kupić. **Wartość świadczeń to ponad 50 000 pln **

@endcomponent

Wyzwanie polega na posługiwaniu się ** "specjalnym linkiem zliczającym punkty"** lub indywidualnymi materiałami promocyjnymi, które przygotowaliśmy i które już zawierają w sobie ten link.

Oto Twój **link trackujący!** Wystarczy, że Twoje newslettery, stopki @, reklamy, posty w serwisach społecznościowych będą linkowały do Twojego profilu na stronie Targów eHandlu za pomocą poniższego linka i bierzesz udział w Wyzwaniu.

@component('mail::panel')
[{{ $trackingLink }}]({{ $trackingLink }}) 
@endcomponent

# W Panelu Wystawcy czekają na Ciebie 3 ważne strony 

@component('mail::button', ['url' => $accountUrl])
Zaloguj się do Panelu Wystawcy 
@endcomponent

## NAGRODY

Każda nagroda ma warunki jej przyznania: 

* co do minimalnej liczby punktów 
* co do pozycji w rankingu. Przy każdej pozycji nagrody widzisz czy biorąc pod uwagi stan punktów z dnia poprzedniego miał(a)byś ją przyznaną.

Punktacja (ranking) tworzona jest **z opóźnieniem ok 24h** na podstawie danych z Google Analytics.

## SZABLONY NEWSLETTERA

2 szablony (polski i angielski), które informują o tym, że Twoja firma będzie na Targach eHandlu. Szablony mają link, który prowadzi do Twojego profilu i zlicza punkty.
Każdy newsletter możesz pobrać jako **paczkę ZIP i wczytać do programów typu Freshmail, GetResponse, Mailchimp**...

## MATERIAŁY PROMOCYJNE

To 3 oddzielne linki, które możesz udostępniać na serwisach społecznościowych. każdy z nich generuje inną grafikę jako podgląd (2 z Twoim logotypem... i jedna to Twoja własna kreacja jeśli podano URL do niej w Danych firmy).

Każdy z linków do grafiki możesz skopiować do schowka i wysłać via @, messenger, dodać do własnego newslettera.

@component('mail::button', ['url' => $accountUrl])
Zaloguj się do Panelu Wystawcy 
@endcomponent

# Wybrane nagrody

## Dostęp do najtańszej puli sprzedaży na kolejne Targi

Kolejne Targi eHandlu już w październiku w Warszawie. Najbardziej zaangażowani Wystawcy dostaną informację apropos otwarcia sprzedaży wcześniej. Niższe ceny, lepszy wybór lokalizacji stoiska.

## Wywiad wideo z przedstawicielem firmy na stoisku

Zostanie on przeprowadzony podczas wydarzenia, a następnie opublikowany na fanpage'u Targów eHandlu oraz portalu ehandelmag. Oczywiście zostanie też przekazany do dowolnego wykorzystania przez Wystawcę :)

## Wyróżnienie logotypu

Twój logotyp zostanie wyświetlony na oficjalnej stronie Targów eHandlu wśród wiodących firm z branży e-commerce przez okres 6mcy!

## Aplikacja do skanowania identyfikatorów Zwiedzająych i dane kontaktowe w excelu

Otrzymasz dostęp do aplikacji umożliwiającej skanowanie identyfikatorów zwiedzających. Każdy z przedstawicieli Twojej firmy będzie mógł zbierać dane o odwiedzających i eksportować wyniki do .xls lub .csv.

## Roll-up w strefie cateringu dla Zwiedzających

Twój firmowy roll-up znajdzie się w strefie gastronomicznej dla Zwiedzających.

@component('mail::button', ['url' => $accountUrl])
Zaloguj się do Panelu Wystawcy 
@endcomponent

## Chcesz użyć własnych materiałów promocyjnych? Użyj linku poniżej: 

@component('mail::panel')
[{{ $trackingLink }}]({{ $trackingLink }}) 
@endcomponent

Pozdrawiam, 

Karolina Michalak

Jakub Przybylski

@endcomponent

