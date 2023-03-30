@component('mail::message')
 
# Cześć {{ array_get($profile, "fname")  }},

@component('mail::panel')

Wysoka konwersja udziału w Targach nie zależy tylko od lokalizacji stoiska i jego atrakcyjności.

Ważne a często **kluczowe jest wykorzystanie narzędzi, które Tobie udostępniamy** - są to:

* **Zapraszanie VIP** (kluczowych Partnerów, Prospectów; każda osoba, która przyjmnie zaproszenie ma dostęp do wygodnej strefy rozmów i smacznej kawy w Hali 3)

* Wykorzystanie swoich kanałów social media i baz newsletterowych do **promocji swojego profilu Wystawcy**, który pozwala Zwiedzającym zaproponować Tobie spotkania a także pokazuje lokalizację Twojego stoiska na Hali

* Przeglądanie listy zarejestrowanych Uczestników i **wysyłanie zaproszeń do spotkania podczas Targów**

** Wszystkie te elementy są dostępne (od ponad tygodnia) w Panelu Wystawcy i czekają na Ciebie :)**

@endcomponent


# Zaproszenia VIP 

Oto małe podsumowanie:

Liderem zaangażowania jest **CREHLER** - dziękujemy! Zaproszenia można wysyłać swoimi kanałami lub automatycznie korzystając z Panelu (wpisujemy adres email do kogo ma zostać wysłane).

@component('mail::button', ['url' => $accountUrlVips])
Wyślij zaproszenia VIP dla Partnerów i Klientów
@endcomponent


# Ranking zaangażowania w promocję profilu wystawcy

Ujawniliśmy punkty w rankingu - [zobacz aktualny ranking]({!!$accountUrlRanking!!})

TOP 5 (stan na 13:10) zaangażowania Wystawców i jednocześnie beneficjenci 6 dodatkowych świadczeń to:

* Go2Market

* Futuriti

* IdoSell

* Grupa Marketer / Marketer+ / E-commerce w Praktyce

* WhitePress

**Dziękujemy!**


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

