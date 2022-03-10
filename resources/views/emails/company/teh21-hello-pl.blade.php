

@component('mail::message')
 
 # Cześć  {{ array_get($profile, "fname") }},
 
 Miesiąc do dnia Targów to idealny czas by skonkretyzować przygotowania i zapoznać się z harmonogramem zadań.
 
 ** Udostępniliśmy właśnie zaktualizowany Panel Wystawcy, w którym już teraz możesz zrealizować pierwsze zadania :)**
 
 Uzupełnić dane o firmie 
 
 Dodać osoby z firmy odpowiadające za konkretne obszary  (wkrótce nasze wiadomości będą wysyłane do konkretnych osób z Twojej firmy - w zależności od ich kontekstu)
 
 Skonfigurować przestrzeń wystawienniczą
 
 Zapoznać się z ofertą świadczeń PREMIUM (np Kurator Sceny Prezentacyjnej czy Logotyp na identyfikatorach Zwiedzających)
 
 
 @component('mail::button', ['url' => $accountUrl])
 Panel Wystawcy
 @endcomponent
 
 
 Pozdrawiam,
 
 Karolina Michalak
 
 @endcomponent
 
 
 
 