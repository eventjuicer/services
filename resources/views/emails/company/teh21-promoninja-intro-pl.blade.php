

@component('mail::message')
 
# Cześć {{ array_get($profile, "fname") }},

**W  Panelu Wystawcy udostępniliśmy materiały promocyjne (bannery, szablony newslettera, linki do udostępniania profilu Wystawcy) i kolejną edycję Konkursu dla Wystawców**

## Materiały

@component('mail::button', ['url' => $accountUrlPromote])
Strona z materiałami dla Twojej firmy
@endcomponent

**Strona z materiałami promocyjnym jest publiczna.** 

Adres URL do tej strony możesz wysłać osobie odpowiedzialnej za działania reklamowe w firmie lub do innych osób, które mają konta na serwisach społecznościowych (każda może skorzystać z linków udostępniających link do Twojej strony Wystawcy w serwisach społecznościowych.)

Wszystkie materiały mają dodany specjalny link, który:

a) kieruje do strony Wystawcy (ta strona nie tylko opisuje Twoją firmę ale też pokazuje lokalizację Twojego stoiska na hali targowej) 

b) zlicza punkty w Konkursie dla Wystawców, dzięki czemu uzyskujesz dodatkowe świadczenia.

## Konkurs (Panel -> Pokaż się -> Ranking)

Część dodatkowych usług i świadczeń jest dostępna tylko dla Wystawców, którzy zapraszają swoich Klientów i Partnerów do odwiedzenia stoiska swojej firmy na Targach. Wśród takich świadczeń znajdują się: dostęp do puli early-bird na kolejną edycję Targów, dostęp do większej puli zaproszeń Zwiedzających na spotkanie (dostęp do listy zarejestrowanych rusza na początku przyszłego tygodnia) czy wyróżnienie logotypu na stronie.


Pozdrawiam, 

Karolina Michalak


PS: Mamy świadomość, że przygotowane materiały nie są dziełami sztuki :))

Jeśli chcesz się wyróżnić i masz możliwość przygotowania własnych - do kierowania na profil Wystawcy użyj "gołego" linka, który został podany na końcu strony z materiałami.

ten link to:

@component('mail::panel')
[{{ $trackingLink }}]({{ $trackingLink }}) 
@endcomponent

@endcomponent

