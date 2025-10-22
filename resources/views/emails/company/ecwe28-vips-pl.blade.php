@component('mail::message')
 
# Cześć {{ array_get($profile, "fname") }},

W aplikacji eventowej E-commerce Warsaw Expo (ecwe.pl), do której mają dostęp wszyscy zarejestrowani Przedstawiciele Wystawcy, czekają zaproszenia VIP dla Partnerów i Klientów.

Link logujący do aplikacji eventowej dla każdego Przedstawiciela znajdziesz w sekcji Przedstawiciele Wystawcy - pod linkiem poniżej. 

@component('mail::button', ['url' => $accountUrlReps])
Zaloguj się do swojego konta
@endcomponent

Regards, 

{{$footer}}

@endcomponent
