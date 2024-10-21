@component('mail::message') 

Cześć {{ $p->translate("[[fname]]") }}!

*Piątkowe Targi eHandlu to nie tylko stoiska z produktami i usługami wspierającymi e-commerce, prelekcje Praktyków i warsztaty.*

**Marek Kich** - prowadzący podcast **"Sztuka E-Commerce"** zaprasza na wywiady z Goścmi Specjalnymi 

## Kojarzysz antykwariat Tezeusz.pl? 

@component('mail::panel')

Gościem Marka Kicha będzie Andrzej Miszk - CEO Tezeusz.pl. 

Poznaj historię firmy, który sprzedała 1,5mln używanych ksiązek i posiada 14 filii zakupowych.

Andrzej Miszk opowie, jak rozwijać i zarządzać biznesem, który dla wielu jest dziś inspiracją.

@endcomponent


## Interesuje Ciebie self-publishing? Wiesz która firma odpowiadała za logistykę takich bestsellerów jak "Finansowy Ninja" czy "Finansowa Forteca"?

@component('mail::panel')

Marek Kich wypyta Krzysztofa Bartnika - CEO IMKER - czy sprzedaż e-booków i kursów online nadal się opłaca i jakie są warunki skutecznej sprzedaży produktów cyfrowych w Internecie.

@endcomponent

@component('mail::button', ['url' => 'https://targiehandlu.pl/visit'])
Wygeneruj swój bilet
@endcomponent


## Trzecim gościem Marka Kicha będzie Remigiusz Chrzanowski - Chief Partner Sales Officer Health Labs Care.

@component('mail::panel')
"Apteka Gemini, Super Pharm, DOZ, a dzisiaj Health Labs Care. Można powiedzieć, że Remigiusz Chrzanowski zdobył koronę polskiej farmacji. Postanowiłem go o tę drogę zapytać na scenie. Podczas wywiadu porozmawiamy o różnicach w zarządzaniu dużym i trochę mniejszym e-Commerce, o sprzedaży D2C i perfekcyjnej obsłudze klienta."

@endcomponent


[Agenda wystąpień i wywiadów](https://targiehandlu.pl/visit)


@component('mail::panel')

Targi eHandlu już **w piątek na EXPO XXI w Warszawie.**

**Wstęp** na EXPO i wszystkie sceny prezentacyjne jest **otwarty** - wymagana jedynie rejestracja online.

**34 prezentacje na 4 scenach i 150 Wystawców**

@endcomponent






Pozdrawiamy,

Zespół Targów eHandlu

**[Konfiguracja newslettera]({{ $unsubscribe }})**


@endcomponent

