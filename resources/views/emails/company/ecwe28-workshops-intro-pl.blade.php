@component('mail::message')
 
# Cześć {{ array_get($profile, "fname") }},

Startują zgłoszenia chęci **przeprowadzenia Warsztatu** podczas jesiennych targów E-commerce Warsaw Expo.

Wszystkie informacje znajdują się na stronie: [https://ecommercewarsaw.com/workshops](https://ecommercewarsaw.com/workshops). Zgłoszenia przyjmowane są tylko do 7 października.

Czy już promujesz swój profil Wystawcy? [Lista bannerów, link do profilu, link do rankingu!]({!!$accountUrlPromotePublic!!})

Pozdrawiam, 

{{$footer}}

PS: oto skrót wczorajszej wiadomości (jeśli nie miał-aś/eś jeszcze szansy ją odczytać)

(...)

**Wystartowała sprzedaż biletów dla Zwiedzających na jesienne targi E-commerce Warsaw Expo.** 

Po raz pierwszy w historii "Targów eHandlu", wstęp jest biletowany. 

(...)

@component('mail::panel')

(...) **Bilety Zwiedzających są 4x tańsze gdy kupowane są przez profil Wystawcy**. Każdy Twój "Badge Buddy" będzie miał **identyfikator z Twoim logotypem**. Przekażemy Tobie listę wszystkich Twoich fanów (bez danych kontaktowych).

@endcomponent

To co? Czas start!

[Lista bannerów, link do profilu, link do rankingu!]({!!$accountUrlPromotePublic!!})

@component('mail::panel')

Na Twojej stronie z materiałami znajdziesz link do rankingu "Love Brands" czyli które firmy wybierają zwiedzający kupujący bilet sponsorowany. Wyniki zaskakują :)

@endcomponent

PS: Niedługo wystartuje konkurs dla Wystawców - już teraz możesz wyrobić sobie lepsze miejsce w rankingu nie opóźniając promowania swojego udziału w Targach.

PS: Jeśli Twoja strona z materiałami promocyjnymi jest niedostępna [zaktualizuj dane firmy]({!!$accountUrl!!})

Pozdrawiam, 

{{$footer}}


@endcomponent

