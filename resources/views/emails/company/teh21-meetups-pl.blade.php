

@component('mail::message')
 
# Cześć {{ array_get($profile, "fname")  }},

# Na koncie Wystawcy pojawiła się możliwość przeglądania i zapraszania na spotkanie zarejestrowanych Uczestników. 

Wyciśnij z Targów eHandlu jak najwięcej!

@component('mail::button', ['url' => $accountUrlVisitors])
Przeglądaj listę
@endcomponent

# Jak to działa od strony Wystawcy

Na start masz **10 zaproszeń** ale nawet minimalna aktywność w promowaniu swojego targowego profilu Wystawcy ("Pokaż się" -> "Materiały promocyjne") może zwiększyć Twój limit do 60 a nawet 200 zaproszeń.

Przeglądając listę uczestników wybierasz interesującą Cię osobę i klikasz przycisk: "Zaproś" - możesz wpisać swoje zaproszenie. 
Po kliknięciu "Zapisz" Twoja wiadomość zostanie dodana do wysyłki (zaproszenia rozsyłamy 3x dziennie - "hurtem")

# Jak to działa od strony Zwiedzającego...

Zaproszenia są grupowane i wysyłane **do 3 razy dziennie** . 
Zwiedzający może zaakceptować lub odrzucić zaproszenie.

W momencie akceptacji **Wystawca otrzymuje pełne dane kontaktowe do Zwiedzającgo** i może umówić się na spotkanie na stoisku z wykorzystaniem swoich narzędzi i procedur.

@component('mail::button', ['url' => $accountUrlVisitors])
Przeglądaj listę
@endcomponent

Regards, 

{{$footer}}

@endcomponent

