@component('mail::message')
 
# Cześć {{ array_get($profile, "fname") }},

@component('mail::panel')
Podczas nadchodzącej edycji Targów **Strefa VIP będzie miejscem wyjątkowych spotkań** Prelegentów, Wystawców, Zwiedzających, którzy zaakceptowali zaproszenia Wystawców. 

W strefie będzie można prowadzić biznesowe rozmowy w najbardziej sprzyjających warunkach, popijając przy tym dobrą herbatę lub kawę :)
@endcomponent

Link do rejestracji Zwiedzającego VIP

[https://targiehandlu.pl/vip?referral=C{{ $company_id }}](https://targiehandlu.pl/vip?referral=C{{ $company_id }}) 

**Wyślij go swoim Kontrahentom oraz Partnerom a my nadamy im status VIP (otrzymają specjalną opaską uprawniająca do wejścia do Strefy VIP)**

Pozdrawiamy, 

Karolina Michalak

Adam Zygadlewicz

@endcomponent

