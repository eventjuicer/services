@component('mail::message')
 
# Cześć {{ array_get($profile, "fname")  }},

2 tematy.

(1)

Przygotowaliśmy zdjęcia z minionych Targów, które dotyczą Twojej firmy.

@component('mail::button', ['url' => $photosUrl ])
Pobierz zdjęcia (.zip)
@endcomponent

(2)

Przypominamy plan startu sprzedaży powierzchni wystawienniczej na 27. **Targi eHandlu (3 kwietnia 2025 w Warszawie - EXPO XXI)**

@component('mail::panel')

# Środa - 6 listopada 11:00

Ekskluzywna sprzedaż dla firm z TOP30 Konkursu dla Wystawców czyli **dla Twojej firmy**

[Układ hali, ceny](https://targiehandlu.pl/top30_hhtdl5ac1k)

(W czwartek (7 listopada) sprzedaż zostanie publicznie otwarta dla pozostałych zainteresowanych.)

@endcomponent




## Do 16:00 dzisiaj (wtorek) - Sprzedaż hurtowa powierzchni 

Sprzedaż dla Wystawców minionych/jesiennych Targów eHandlu zainteresowanych większą przestrzenią - **3 i więcej stoisk**

[Układ hali, ceny](https://targiehandlu.pl/top30_hhtdl5ac1k)

**Prośba o info zwrotne jeśli Twoja firma jest zainteresowana min. 3 stoiskami. **



Pozdrowienia, 

{{$footer}}

@endcomponent

