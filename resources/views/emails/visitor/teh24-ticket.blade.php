@component('mail::message')

Cześć {{$p->translate("[[fname]]") }} 

Targi eHandlu odbędą się **27 października (piątek) w Warszawie (EXPO XXI)**

# [IDĘ / Pobieram bilet]({!! $going !!})

## [Nie Idę]({!! $notGoing !!})

@component('mail::panel')

**160 produktów i usług e-commerce** w ramach przestrzeni wystawienniczej

**38 prelegentów** w ramach 4 otwartych scen prezentacyjnych

Dostęp do Strefy VIP jeśli umówisz się z Wystawcą na spotkanie

@endcomponent

Do zobaczenia! 

Zespół Targów eHandlu

@endcomponent