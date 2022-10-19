

@component('mail::message')
 
# Cześć {{ array_get($profile, "fname") }},

Uprzejmie przypominamy o promocji [publicznego profilu Twojej firmy]({!! $profileUrl !!}) i promocji swojego udziału w Targach eHandlu.

**Oprócz większej konwersji udziału w targach, zaangażowanie w promocję generuje dodatkowe korzyści - m.in. Zwiedzający może zaproponować Tobie spotkanie.** Po akceptacji zaproszenia otrzymasz **pełne dane kontaktowe** a Zwiedzający dostęp do strefy VIP.

Jeśli posiadasz **profil na serwisie społecznościowym** lub **bazę newsletterową kontrahentów** - resztę zapewniamy my. 

@component('mail::button', ['url' => $accountUrlPromote])
Materiały promocyjne
@endcomponent

Jeśli nie chcesz korzystać z naszych materiałów - stwórz kampanię tak jak chcesz, użyj specjalnego linka dostępnego poniżej.

@component('mail::panel')
[{{ $trackingLink }}]({!! $trackingLink !!}) 
@endcomponent


Pozdrawiam, 

{{$footer}}

@endcomponent

