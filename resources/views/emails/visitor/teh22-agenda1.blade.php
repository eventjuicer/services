

@component('mail::message')

Cześć {{ $p->translate("[[fname]]") }}!

## Właśnie opublikowaliśmy [listę prezentacji na scenach A i D](https://targiehandlu.pl/schedule)

@component('mail::panel')
Przypominamy, że 22. Targi eHandlu odbędą się **27 października w EXPO XXI w Warszawie.**

Targi eHandlu to **4 sceny z prezentacjami Ekspertów** oraz **140 Wystawców** - oferentów usług i produktów wspierających handel w Internecie.
@endcomponent


**Scena A**

| Prelegent/-ka | Tytuł prezentacji |
| --- | --- |
| Agnieszka Wąsowska **locatheart** | **Wielojęzyczne SEO w ekspansji zagranicznej**|
| Beata Mordarska **Veneo Performance** | **„Śniło mi się, że je jadłam i znalazłam w żabce” – o tym jak Lody Koral Ekipa stały się viralem. DMF w praktyce.**|
| Tomasz Zarychta **Media4U** | **Błędy w sklepach internetowych - nasze wnioski z przebadania ponad 100 sklepów**|
| Mateusz Osiecki **PrestaShop** | **Od pomysłu do sukcesu: Rzeczy, które chcielibyście wiedzieć o PrestaShop ale baliście się zapytać.**|
| Krystian Podemski **PrestaShop** | **Od pomysłu do sukcesu: Rzeczy, które chcielibyście wiedzieć o PrestaShop ale baliście się zapytać.**|
| Sebastian Horoszko **Zaufane.pl** | **Niech moc społeczności będzie z Tobą! Social Proof na zagranicznym rynku**|
| Dominika Rozprzak **adcookie** | **5 sposobów na efektywne skalowanie kampanii SEM – czyli jak zwiększyć przychody o 800% r/r.**|
| Mikołaj Miszczak **SAMITO S.A.** | **Dlaczego marketing automation zawodzi w niektórych sklepach? Oto przykłady fail stories, o których się zwykle milczy**|
| Barbara Tatar **Asseco Business Solutions S.A.** | **e-Commerce w branżach wymagających czyli czy e-Commerce jest dla wszystkich?**|
| Cezary Kożon **Spyrosoft eCommerce** | **Nowoczesne wdrożenia eCommerce: Co zrobić by wdrożenie się udało oraz czego unikać?**|

**Scena B**

(wkrótce)

**Scena C**

(wkrótce)

**Scena D**

| Prelegent/-ka | Tytuł prezentacji |
| --- | --- |
| Adam Bułka **PayPo** | **Jak sprzedawać więcej w czasach, kiedy klienci kupują mniej? Zwiększ wartość koszyka zakupowego nawet o 60%.**|
| Filip Iwański **goodylabs** | **Zmarnowane szanse na konwersję kontra Unified Experience. Jak zmodyfikować strategię marki, żeby wesprzeć sprzedaż i poprawić doświadczenie użytkownika.**|
| MICHAŁ BLAK **edrone** | **Koniec epoki “search”**|
| Tomasz Kowalczyk **Peoplefone Polska S.A.** | **Ogranicz skutki inflacji w e-commerce, dzięki możliwościom telefonii internetowej.**|
| Łukasz Heine **Yetiz Interactive** | **"Trzy taktyki retencyjne, które pomogą Ci przetrwać kryzys”**|
| Michał Nawrocki **Grupa iCEA** | **Międzynarodowe pozycjonowanie. Czy agencja z Polski może robić dobre SEO na rynkach zagranicznych?**|
| Patryk Szubiczuk **Linker Cloud Sp. z o.o.** | **Logistyka w eCommerce bez tajemnic: Fulfillment jako narzędzie do szybszego dotarcia do klienta końcowego**|
| Maks Mielhorski **TrustMate S.A.** | **Cialdini ma rację! O roli opinii w zwiększaniu sprzedaży e-commerce.**|




@component('mail::button', ['url' => 'https://targiehandlu.pl/schedule'])
Sprawdź agendę
@endcomponent


Pozdrawiamy,

Karolina Michalak

Adam Zygadlewicz

@endcomponent



