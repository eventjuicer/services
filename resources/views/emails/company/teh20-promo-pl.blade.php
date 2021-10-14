

@component('mail::message')
 
# Cześć

@component('mail::panel')
Przypominamy o tym, że dla każdego Wystawcy przygotowaliśmy materiały promocyjne i każdy Wystawca ma swój publiczny profil Targowy
[{{ $trackingLink }}]({{ $trackingLink }}) pokazujący m.in. informacje o firmie i lokalizację stoiska w Hali targowej.
@endcomponent

@component('mail::button', ['url' => "https://promo.targiehandlu.pl/companies/" .$company_id])
Materiały promocyjne
@endcomponent

Serdecznie zachęcamy do publikowania informacji o swoim udziale na kanałach społecznościowych, wysłania mailingu do kontrahentów. Zmiana nabytych przez okres pandemiczny przyzwyczajeń do form online i powrót do wiary w skuteczność formuły fizycznych targów to ogromna praca i mocno wierzymy, że nam Państwo w tym pomożecie.


@endcomponent

Regards, 

Karolina Michalak

Adam Zygadlewicz

@endcomponent

