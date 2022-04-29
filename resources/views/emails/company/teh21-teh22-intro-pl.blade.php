

@component('mail::message')
 
# Cześć {{ array_get($profile, "fname")  }},

Jeszcze raz dziękujemy za udział w 21. Targach eHandlu! 

(1)

Na ten moment mamy ok 30% odpowiedzi na ankietę podsumowywującą. 

**Czy mamy w niej Twoją odpowiedź?**

@component('mail::button', ['url' => "https://forms.gle/5DPJmLbrsMTQ2QXy7"])
Ankieta
@endcomponent

(2)

Posortowaliśmy zdjęcia z Targów. Poniżej "paczka" zdjęć dotycząca Twojej firmy.

@component('mail::button', ['url' => $photosUrl ])
Zdjęcia z 21. Targów eHandlu (.zip)
@endcomponent

(3)

**Kolejna edycja odbędzie się 27 października**. Sprzedaż powierzchni wystawienniczej powinna ruszyć ok 17 maja.

Pozdrowienia, 

{{$footer}}

@endcomponent

