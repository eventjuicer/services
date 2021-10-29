@component('mail::message')
 
# Cześć {{ array_get($profile, "fname") }},


Link do rejestracji dla VIP dla Twoich Partnerów i Kontrahentów **Roześlij go a my nadamy tym Zwiedzającym status VIP (otrzymają specjalną opaską uprawniająca do wejścia do Strefy VIP)**

[https://targiehandlu.pl/vip?referral=C{{ $company_id }}](https://targiehandlu.pl/vip?referral=C{{ $company_id }}) 


@component('mail::panel')
Podczas nadchodzącej edycji Targów **Strefa VIP będzie miejscem wyjątkowych spotkań** Prelegentów, Wystawców, Zwiedzających, którzy zaakceptowali zaproszenia Wystawców. 

W strefie będzie można prowadzić biznesowe rozmowy w najbardziej sprzyjających warunkach, popijając przy tym dobrą herbatę lub kawę :)
@endcomponent



Pozdrawiamy, 

Karolina Michalak

Adam Zygadlewicz

@endcomponent

