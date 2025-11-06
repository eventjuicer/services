@component('mail::message')
 
# Cześć {{ array_get($profile, "fname") }},

Jeszcze raz dziękujemy za udział w E-commerce Warsaw Expo. **Kolejna edycja targów odbędzie się 23 kwietnia 2026 w Warszawie.**

Od jutra startujemy z publicznym oferowaniem przestrzeni wystawienniczej. **Rezerwacja przestrzeni wystawienniczej dzisiaj to gwarancja dobrej ceny i dobrej lokalizacji.** Jeśli nie otrzymał-eś/aś linka do rezerwacji prosimy o kontakt.

Czy mamy Twój feedback w naszej ankiecie? Jeśli nie - bardzo prosimy o poświęcenie 5 minut na [wypełnienie ankiety](https://forms.gle/8GipBYUiCBF5QB4L6) (tym razem ankieta jest krótka :-)

Mamy Twoje zdjęcia z poprzedniego wydarzenia:

@component('mail::button', ['url' => $photosUrl])
Pobierz zdjęcia .zip
@endcomponent


@component('mail::panel')

Nasze plany mamy na edycję wiosenną:

Przede wszystkim położymy nacisk na **lepszy networking przed i w trakcie** wydarzenia. Mamy wiele pomysłów, które musiały poczekać, aż uporamy się z rebrandingiem, wprowadzeniem odpłatnych biletów. Pomimo, że w I połowie roku dzieje się dość dużo w kontekście "wydarzeń branżowych", **jesteśmy przekonani, że E-commerce Warsaw Expo utrzyma status lidera.**

@endcomponent




Regards, 

{{$footer}}

@endcomponent