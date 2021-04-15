

@component('mail::message')
 
# Dzień dobry {{ array_get($profile, "fname") }},

## Jutro (16 kwietnia) o 10:00 startuje przedsprzedaż slotów prezentacyjnych na Kongres eHandlu Online, który będzie transmitowany online 9 czerwca na https://live.targiehandlu.pl z wcześniej przygotowanych materiałów video.

Przewidzieliśmy **3 typy uczestnictwa**: 

- Udział standardowy (prezentacja 15 minut)

- Sponsor wirtualnej sceny (prezentacja 25 minut + dodatkowy pakiet korzyści)

- Partner główny Kongresu (prezentacja 25 minut, równolegle na 3 scenach + dodatkowy ultra-pakiet korzyści)

oraz **2 możliwości zrealizowania video** (co w głównej mierze podyktowane jest sytuacją w związku z COVID-19): 

- nagranie we własnym zakresie (np u siebie w firmie)

- zorganizowanie nagrania w studio w Warszawie (dodatkowo płatne)

@component('mail::button', ['url' => "https://live.targiehandlu.pl"])
Szczegóły na live.targiehandlu.pl
@endcomponent

**Jeśli otrzymujesz tą wiadomość, oznacza to, że Twoja firma bierze udział w przedsprzedaży. Od poniedziałku (19 kwietnia) oferta będzie publiczna.**


Z pozdrowieniami,

Karolina Michalak

Adam Zygadlewicz

@endcomponent