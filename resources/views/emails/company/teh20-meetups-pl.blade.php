

@component('mail::message')
 
# Cześć {{ array_get($profile, "fname")  }},

# Na koncie Wystawcy pojawiła się możliwość przeglądania i zapraszania na spotkanie zarejestrowanych Uczestników. 

Wyciśnij z Targów eHandlu jak najwięcej!

@component('mail::button', ['url' => $accountUrl])
Zaloguj się do swojego konta
@endcomponent

# Jak to działa od strony Wystawcy

Na start masz **10 zaproszeń** ale nawet minimalna aktywność w konkursie dla Wystawców może zwiększyć Twój limit do 60 a nawet 200 zaproszeń.

Przeglądając listę uczestników (menu: "Przeglądaj uczestników") wybierasz interesującą Cię osobę i klikasz (przycisk: "Zaproś") - możesz wpisać swoje zaproszenie. Po kliknięciu "Zapisz" Twoja wiadomość zostanie dodana do wysyłki (zaproszenia rozsyłamy 3x dziennie - "hurtem")

**Podpowiedź:** Jeśli nie chcesz każdorazowo tworzyć wiadomości możesz stworzyć **szablon** korzystając z opcji "Szablon wiadomości Zaproszenie" dostępnej w "Dane firmy".

# Jak to działa od strony Zwiedzającego...

Zaproszenia są grupowane i wysyłane **do 3 razy dziennie** (tylko w dni robocze). Zwiedzający może zaakceptować lub odrzucić zaproszenie - wtedy nie dostanie już powiadomień jeśli żaden nowy Wystawca nie będzie chciał się spotkać.

W momencie akceptacji **Wystawca otrzymuje pełne dane kontaktowe do Zwiedzającgo** i może umówić się na spotkanie na stoisku z wykorzystaniem swoich narzędzi i procedur.

@component('mail::button', ['url' => $accountUrl])
Zaloguj się do swojego konta
@endcomponent

Regards, 

Karolina Michalak

@endcomponent

