

@component('mail::message')
 
# Cześć {{ array_get($profile, "fname") }},

Uprzejmie przypominamy o promocji [publicznego profilu Twojej firmy]({!! $profileUrl !!}) i promocji swojego udziału w Targach eHandlu.

Oprócz większej skuteczności udziału w targach, zaangażowanie w promocję generuje dodatkowe korzyści - m.in. **automatycznie zwiększa liczbę dostępnych zaproszeń na spotkanie (nawet do 200).**

Jeśli posiadasz **profil na serwisie społecznościowym** lub **bazę newsletterową kontrahentów** - resztę zapewniamy my. 

@component('mail::button', ['url' => $accountUrlPromote])
Materiały promocyjne
@endcomponent

Jeśli nie chcesz korzystać z naszych materiałów - stwórz kampie tak jak chcesz, użyj specjalnego linka dostępnego poniżej.

@component('mail::panel')
[{{ $trackingLink }}]({!! $trackingLink !!}) 
@endcomponent


Pozdrawiam, 

{{$footer}}

@endcomponent

