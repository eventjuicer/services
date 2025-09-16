@component('mail::message')
 
# Dzień dobry {{ $p->translate("[[fname]]") }},

Kolejne targi eHandlu już jako pełnowymiarowe "E-commerce Warsaw Expo" odbędą się **24 października na EXPO XXI w Warszawie.** 

Już teraz możesz zrobić **2 rzeczy:**

Zgłosić się jako prelegent bo **dzisiaj zamykamy termin zgłoszeń na wystąpienia.**

Zarejestrować się aby otrzymać powiadomienie o starcie sprzedaży biletów po bardzo atrakcyjnej cenie.

**Chcesz wystąpić? informacje poniżej!**

@component('mail::panel')

## Chcesz wystąpić na jednej ze 4 scen jesiennych targów E-commerce Warsaw Expo? Termin zgłoszeń kończy się dzisiaj - do końca dnia!

@component('mail::button', ['url' => "https://ecommercewarsaw.com/speaking"])
Chcę zostać Prelegentem
@endcomponent

@endcomponent

**Chcesz kupić bilet w ultra-niskiej cenie?**

@component('mail::button', ['url' => "https://ecommercewarsaw.com/visit"])
Chcę kupić bilet dla zwiedzających w pierwszej puli.
@endcomponent

@endcomponent



Z pozdrowieniami,

Karolina Wojtas


**[Konfiguracja newslettera]({{ $unsubscribe }})**

@endcomponent









