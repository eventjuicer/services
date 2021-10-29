

@component('mail::message')


<a href="{{$promolink}}"><img src="{{$imageEnc}}" alt="" style="margin-bottom: 30px;"></a>

# Cześć, tu {{  array_get($companydata, "name") }}!

## 20 października będziemy na 20 Targach eHandlu w Warszawie. Jeśli masz czas i chęci, chętnie porozmawiamy na miejscu przy naszym stoisku.


@component('mail::button', ['url' => $promolink])
Odbierz bezpłatną wejściówkę
@endcomponent


Najbliższe Targi eHandlu to również **aż 6 scen** prezentacyjnych, prawie **130 Wystawców** oferujących produkty i usługi pomagające lepiej sprzedawać w Internecie.

Wejście zarówno na EXPO jak i sceny prezentacyjne jest bezpłatne (mogą obowiązywać dodatkowe ograniczenia związane z Covid19)

Do zobaczenia, {{ array_get($companydata, "name") }} 

PS: Targi eHandlu odbędą się na **EXPO XXI (ul. Prądzyńskiego 12/14 - w pobliżu stacji PKP Warszawa Zachodnia). Start 10:00.** 


@endcomponent



