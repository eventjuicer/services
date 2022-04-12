

@component('mail::message')
 
# Cześć {{ array_get($profile, "fname")  }},

Zliczyliśmy zawartość Twojego welcome-packa pod kątem voucherów na catering i kart parkingowych.

## Czy to się zgadza?

Vouchery cateringowe {{ array_get($additionalData, "cateringAssigned")  }}

Karty parkingowe {{ array_get($additionalData, "parkingAssigned")  }}

**Jeśli nie to proszę do 12:00...**

@component('mail::button', ['url' => $accountUrlVouchers])
Dokup vouchery i karty parkingowe
@endcomponent

## Skąd te liczby?

Liczba zarejestrowanych Przedstawicieli  {{ array_get($additionalData, "repsCount")  }}

Liczba stoisk {{ array_get($additionalData, "howManyBooths")  }} 

Dokupiono voucherów {{ array_get($additionalData, "cateringCount")  }} (standardowo - bez opłat - przydzielamy tyle voucherów ilu zarejestrowano Przedstawicieli ale nie więcej niż 4 sztuki)

Dokupiono kart parkingowych  {{ array_get($additionalData, "parkingCount")  }} (standardowo - bez opłat - przydzielamy 1 kartę parkingową per stoisko)


Regards, 

{{$footer}}

@endcomponent

