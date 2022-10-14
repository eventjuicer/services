@component('mail::message')
 
# Cześć {{ array_get($profile, "fname")  }},

@component('mail::panel')

Dobra konwersja inwestycji w Targi nie zależy tylko od lokalizacji stoiska i atrakcyjności formuły wystawiania się :)

Ważne a często **kluczowe jest wykorzystanie narzędzi, które Tobie udostępniamy** - są to:

* **Zapraszanie VIP** (kluczowych Partnerów, Prospectów; każdy ma dostęp do ekskluzywnej strefy z kanapami i do bezpłatnego bufetu kawowego)

* Wykorzystanie swoich kanałów social media i baz newsletterowych do **promocji swojego profilu Wystawcy - który choćby pokazuje lokalizację Twojego stoiska na Hali**

* Przeglądanie listy zarejestrowanych Uczestników i **wysyłanie zaproszeń do spotkania podczas Targów**

** Wszystkie te elementy są dostępne w Panelu Wystawcy i czekają na Ciebie :)**

@endcomponent


Oto małe podsumowanie:


# Zaproszenia VIP 

Liderem zaangażowania jest **EXPANDECO** - dziękujemy! Zaproszenia można wysyłać swoimi kanałami lub automatycznie korzystając z Panelu (wpisujemy adres email do kogo ma zostać wysłane).

@component('mail::button', ['url' => $accountUrlVips])
Wyślij zaproszenia VIP dla Partnerów i Klientów
@endcomponent


# Ranking zaangażowania 

TOP 5 (stan na 13:45) zaangażowania Wystawców i jednocześnie beneficjenci 5 dodatkowych świadczeń to:

* IDEA commerce S.A.

* Grupa Marketer

* Expandeco

* inSolutions

* Up Blue

**Dziękujemy Wam i gratulujemy zrozumienia formuły skutecznego udziału w Targach!**


@component('mail::button', ['url' => $accountUrlPromote])
Sprawdź materiały promocyjne i ranking
@endcomponent


@component('mail::panel')

**Pamiętaj, że stronę z materiałami promocyjnymi możesz wysłać do osoby odpowiedzialnej w firmie za działania promocyjne** (nie będzie miała ona dostępu do reszty panelu) - wystarczy wysłać ten link 

{!! $accountUrlPromotePublic !!}

@endcomponent


Pozdrowiam, 

{{$footer}}

@endcomponent

