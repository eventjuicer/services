

@component('mail::message')
 
# Hello {{$profile->translate("[[fname]]")}}!

## We have checked data submitted by your company and company's online profile on Targi ehandlu website

To help us organize the event, please **correct a few fields** in your exhibitor's panel

@foreach ($errors as $f => $p)
	
**{{$f}}** {{$p}}

@endforeach

@component('mail::button', ['url' => $accountUrl])
I want to sign in and edit  
@endcomponent


Your company profile  [link]({{$profileUrl}})


@component('mail::panel')
It is very import to have online profile updated. It is required in order to proceed with next steps of exhibitor's involvent.

@endcomponent

**Please edit your profile to stop receiving this message**

Regards, 

{{$footer}}

@endcomponent



