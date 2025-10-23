@component('mail::message')
 
# Cześć {{ array_get($profile, "fname") }},



**Pamiętaj, że wejście zwiędzających na E-commerce Warsaw Expo będzie możliwe od godziny 9:00.** (W poprzednich edycjach - Targów eHandlu - targi startowały o 10:00.)



Wszystkie kluczowe informacje logistyczne znajdują się w Panelu Wystawcy. Ta strona Panelu jest dostępna także dla niezalogowanych użytkowników - możesz wysłać ją do innych osób, które będą reprezentowały Twoją firmę na Targach, kopiując URL przeglądarki.

@component('mail::button', ['url' => $accountUrlLogistics])
Informacje logistyczne
@endcomponent

**Prosimy przescrolluj stronę do "Opcjonalny dzień montażowy" i "Targi - 24 października"** i przeczytaj uważnie :)

Poniżej tylko wybrane informacje:

## Miejsce Targów

Expo XXI, ul. Prądzyńskiego 12/14, 01-222 Warszawa

**ta edycja odbędzie się w HALI 1 (stoiska i sceny) oraz HALI 3 (catering, Strefa VIP, Warsztaty)**

<img src="https://res.cloudinary.com/eventjuicer/image/upload/w_1200,h_1000,c_limit,f_auto/v1666615294/teh22_exhibitor_orientation_map.png" alt="" style="max-width: 700px;"/>


## Parkowanie (dzień przed eventem i w dzień wydarzenia)

Przy pierwszym wjeździe na teren EXPO XXI, pobierz bilet parkingowy z parkomatu.

**Aby wyjechać bezpłatnie**, potrzebujesz karty parkingowej, którą otrzymasz w welcome-packu podczas pierwszego spotkania z nami (w dzień montażowy lub rano przed wydarzeniem).

**Do kolejnych wjazdów i wyjazdów używaj karty wjazdowo-wyjazdowej dostarczonej przez nas (nie pobieraj niczego z parkomatu)**.

## Dzień montażowy (opcjonalny) - 23 października

Godziny montażowe to 16:00 - 20:00 (o ile nie ustalono z nami inaczej). 

Po wejściu na Halę #1 (wejście po lewej stronie patrząc od głównego wejścia/lobby) udaj się do punktu odbioru pakietów powitalnych (narożnik/początek Hali #1), gdzie nasi Opiekunowie będą na Ciebie czekać i zaprowadzą Cię do Twojego stoiska.

## Dzień Targowy - 24 października

Montaż w dzień targowy możliwy jest wyłącznie w godzinach **7:00 - 8:30.** (O 9:00 hala zostanie otwarta do publicznego zwiedzania.)

**Jeśli nie odebrałeś/aś jeszcze pakietu powitalnego w opcjonalnym dniu montażowym**, udaj się do punktu informacyjnego dla Wystawców (przy wejściu do hali z stoiskami i scenami - Hala 1).

W przypadku jakichkolwiek problemów związanym z Twoim stoiskiem (np. z dostępem do prądu), zgłoś się do punktu info dla wystawców lub wyślij SMS na numer Opiekuna, który znajdziesz w welcome-packu.

**Demontaż** jest możliwy od 17:15. Hala będzie dostępna do 20:00 


## Welcome pack

Welcome pack zostanie przekazany podczas naszego pierwszego spotkania (23 października lub w dzień targowy - 24 października).
Zawiera on:

* identyfikatory przedstawicieli (uprawniające także do wejścia do strefy VIP!)

* vouchery obiadowe (w liczbie zarejestrowanych w Panelu Wystawcy ale nie więcej niż 4 sztuki - chyba, że dokupiłeś/aś dodatkowe)

* numer kontaktowy do osoby do Opiekuna, 

* karta parkingowa (potrzebna do wyjazdu i ew. kolejnych wjazdów-wyjazdów)

* hasło do Wi-Fi

## Dodatkowe informacje i zalecenia

**Pamiętaj, że standardowe przyłącze prądu to tylko 300W**. Jeśli planujesz zużycie większej mocy niż korzystanie z 2 laptopów i ewentualnie TV, dokupindywidualne przyłącze (dostępne w Panelu Wystawcy). Skontaktuj się z nami, jeśli masz wątpliwości.

@component('mail::panel')

UWAGA: Jeśli planujesz przyklejenie wykładzin we własnym zakresie (bez wykupienia odpowiedniej usługi od nas), zalecamy skorzystanie z profesjonalnej taśmy dwustronnej ETG firmy Imawex (nie prowadzimy jej sprzedaży). 
Typowa (=marketowa) taśma dwustronna jest nie do usunięcia po wydarzeniu co wygeneruje dodatkowe (naprawdę kosmiczne) koszty sprzątania, które będziemy musieli refakturować.

@endcomponent

Regards, 

{{$footer}}

@endcomponent