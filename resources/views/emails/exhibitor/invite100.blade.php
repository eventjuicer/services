

@component('mail::message')

<div style="text-align: center;">
	<a href="{{$promolink}}">
		<img src="{{$imageEnc}}" alt="" style="margin-top: 10px; margin-bottom: 30px;">
	</a>
</div>

# Cześć, tu {{  array_get($companydata, "name") }}!

## 6 kwietnia będziemy na 23. Targach eHandlu w Warszawie. 
Jeśli masz czas i chęci, chętnie porozmawiamy na miejscu przy naszym stoisku.


@component('mail::button', ['url' => $promolink])
Odbierz bezpłatną wejściówkę
@endcomponent


Najbliższe Targi eHandlu to również 4 sceny prezentacyjne, 3 ścieżki warsztatowe i prawie **140 Wystawców** oferujących produkty i usługi pomagające lepiej sprzedawać w Internecie.

Wejście zarówno na EXPO jak i sceny prezentacyjne jest bezpłatne.

Do zobaczenia, {{ array_get($companydata, "name") }} 

PS: Targi eHandlu odbędą się na **EXPO XXI (ul. Prądzyńskiego 12/14 - w pobliżu stacji PKP Warszawa Zachodnia). Start 10:00.** 


@endcomponent



