

@component('mail::message')
 
# Cześć {{ array_get($profile, "fname")  }},

# Przypominamy, że na koncie Wystawcy pojawiła się możliwość przeglądania i zapraszania na spotkanie zarejestrowanych Uczestników. 


**Jeśli uczestnik Targów zaakceptuje zaproszenie otrzymasz kompletne dane kontaktowe do Zwiedzającgo** i możesz umówić się na spotkanie na stoisku z wykorzystaniem swoich narzędzi i procedur.

Każdy uczestnik, który potwierdza chęć spotkania z Wystawcą otrzymuje też status VIP (ma dostęp do specjalnej strefy).


Wyciśnij z Targów eHandlu jak najwięcej!

@component('mail::button', ['url' => $accountUrlVisitors])
Przeglądaj listę
@endcomponent

**Na start masz 10 zaproszeń ale nawet minimalna aktywność w promowaniu swojego targowego profilu Wystawcy ("Pokaż się" -> "Materiały promocyjne") może zwiększyć Twój limit do 60 a nawet 200 zaproszeń.**

## Jak zacząć?

Przeglądając listę uczestników wybierasz interesującą Cię osobę i klikasz przycisk: "Zaproś" - możesz wpisać własny tekst zaproszenia.

Po kliknięciu "Zapisz" zaplanujemy wysyłkę Twojej wiadomości - zaproszenia rozsyłamy 3x dziennie.

Zwiedzający może zaakceptować lub odrzucić zaproszenie.


@component('mail::button', ['url' => $accountUrlVisitors])
Przeglądaj listę
@endcomponent

Regards, 

{{$footer}}

@endcomponent

