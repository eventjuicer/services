@component('mail::message')

Hello {{ $p->translate("[[fname]]") }},
    

@component('mail::panel')

{{$hash}}

@endcomponent



@endcomponent
