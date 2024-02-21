@component('mail::message')

Hi {{ $p->translate("[[fname]]") }},

**The wait is finally over.**

EBE opens today at **9:00 on STATION-Berlin**, giving you access to over **280 leading e-commerce and retail suppliers!**

**If you are unable to print** or have accidentally lost your printed ticket, please **show the code** presented below **at the registration point.**

# {{$hash}}

See you soon!
Lucas, EBE Team

@endcomponent