@component('mail::message')

Cześć {{ $p->translate("[[fname]]") }}!

@component('mail::panel')

Targi eHandlu już w **czwartek 27 października na EXPO XXI w Warszawie.**

Mamy **149 Wystawców**, **35 Prelegentów** 

Pierwsze prezentacje startują o 10:40.

@endcomponent


## Oto 3 powody by zawitać do EXPO XXI w czwartek:

(1) Tylko osoby fizycznie obecne na Targach otrzymają dostęp do wszystkich nagrań prezentacji ze scen A, B, C i D

(2) [Mamy świetną agendę...](https://targiehandlu.pl/schedule) sporo świeżych firm, dużo nowych tematów. 

(3) Właśnie **[uruchomiliśmy możliwość umawiania się na spotkanie z Wystawcą](https://targiehandlu.pl/exhibitors) i wyszukiwania firm po nazwie lub branży, w której działają.** 

(3a) Wejdź na [https://targiehandlu.pl/exhibitors](https://targiehandlu.pl/exhibitors). Znajdź interesującą Cię firmę.

<img src="https://res.cloudinary.com/eventjuicer/image/upload/w_1200,h_1000,c_limit,f_auto/v1666696812/www/teh22_mapsearch_keyword.png" alt="" style="max-width: 700px;"/>


(3b) Kliknij na stoisko, umów się na spotkanie. **Jeśli Wystawca zaakceptuje Twoją propozycję otrzymasz możliwość korzystania ze strefy VIP.**

<img src="https://res.cloudinary.com/eventjuicer/image/upload/w_1200,h_1000,c_limit,f_auto/v1666696812/www/teh22_mapsearch_invite.png" alt="" style="max-width: 700px;"/>

@component('mail::panel')

**7 godzin na aktywnie spędzonych na Targach eHandlu to ekwiwalent tygodni** spędzonych na komunikacji z oferentami usług i produktów do e-handlu i czytaniu artykułów branżowych.

@endcomponent

@component('mail::button', ['url' => 'https://targiehandlu.pl/visit'])
Sprawdź całą agendę i zarejestruj się.
@endcomponent


Pozdrawiamy,

Karolina Michalak

Adam Zygadlewicz



**[Konfiguracja newslettera]({{ $unsubscribe }})**



@endcomponent