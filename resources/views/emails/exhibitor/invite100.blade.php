

@component('mail::message')

<div style="text-align: center;">
	<a href="{{$promolink}}">
		<img src="{{$imageEnc}}" alt="" style="margin-top: 10px; margin-bottom: 30px;">
	</a>
</div>

# Cześć, tu {{  array_get($companydata, "name") }}!

## 3 kwietnia będziemy na 27. Targach eHandlu w Warszawie. 
Czekamy na Ciebie przy naszym stoisku, chętnie wymienimy się doświadczeniami oraz pomysłami.

@component('mail::button', ['url' => $promolink])
Odbierz bezpłatną wejściówkę
@endcomponent


W trakcie Targów eHandlu będą dostępne 4 sceny prezentacyjne, 3 ścieżki warsztatowe oraz **ponad 130 Wystawców**, oferujących innowacyjne rozwiązania, które mogą pomóc w rozwoju Twojego biznesu.

Wstęp na EXPO oraz na sceny prezentacyjne jest bezpłatny.

Do zobaczenia, {{ array_get($companydata, "name") }} 

PS: Targi eHandlu odbędą się na **EXPO XXI (ul. Prądzyńskiego 12/14 - w pobliżu stacji PKP Warszawa Zachodnia). Start 10:00.** 


@endcomponent



