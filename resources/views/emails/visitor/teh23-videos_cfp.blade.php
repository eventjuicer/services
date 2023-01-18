

@component('mail::message')
 
# Dzień dobry {{ $p->translate("[[fname]]") }},

Kolejne Targi eHandlu odbędą się **6 kwietnia na EXPO XXI w Warszawie.**

Aktualnie pracujemy nad agendą wystąpień. **Chcesz wystąpić? informacje poniżej!**

Udostępniamy pierwszą porcję nagrań video z jesiennej 22. edycji Targów, która odbyła się w październiku. Polecamy obserwować portal ehandel.com.pl, na którym regularnie publikujemy kolejne nagrania.


<table style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;color:#74787e;font-size:16px;line-height:1.5em;margin-top:0;text-align:left;border-spacing:30px;">
    <tr>
        <td><img src="https://res.cloudinary.com/eventjuicer/image/upload/w_300,h_300,c_limit,f_auto/v1673862421/c_2275_logotype.png" alt="" /></td>
        <td>Mariya Kallagova - Tribe47
            <strong><a href="https://ehandel.com.pl/co-po-algorytmach-czas-na-kreatywna-reklame-oparta-na-danych,2278">Co po algorytmach? Czas na kreatywną reklamę opartą na danych</a></strong>
       
    </td>
    </tr>
    <tr>
        <td><img src="https://res.cloudinary.com/eventjuicer/image/upload/w_300,h_300,c_limit,f_auto/v1665740338/c_1245_logotype.png" alt="" /></td>
        <td>Michał Blak - edrone 
            <strong><a href="https://ehandel.com.pl/koniec-epoki-search,2277">Koniec epoki “search”</a></strong>
        </td>
    </tr>
    <tr>
        <td><img src="https://res.cloudinary.com/eventjuicer/image/upload/w_300,h_300,c_limit,f_auto/v1633672146/c_1893_logotype.png" alt="" /></td>
        <td>Kacper Skoczylas - cyber_Folks 
            <strong><a href="https://ehandel.com.pl/30-dni-planowania-kampanii-po-nocach-i-caly-budzet-w-bloto-latwe-zmiany-w-sklepie-ktore-wystrzela-twoje-konwersje-w-kosmos,2276">Łatwe zmiany w sklepie, które wystrzelą Twoje konwersje w kosmos!</a></strong>
        </td>
    </tr>

    <tr>
        <td><img src="https://res.cloudinary.com/eventjuicer/image/upload/w_300,h_300,c_limit,f_auto/v1662453230/c_2111_logotype.png" alt="" /></td>
        <td>Tomasz Zarychta - Media4U
            <strong><a href="https://ehandel.com.pl/bledy-w-sklepach-internetowych-wnioski-z-przebadania-ponad-100-sklepow,2280">Błędy w sklepach internetowych - wnioski z przebadania ponad 100 sklepów</a></strong>
        </td>
    </tr>


</table>

@component('mail::panel')

## Chcesz wystąpić na jednej ze scen 23. Targów eHandlu? Termin zgłoszeń właśnie się kończy - ostatnia szansa!

@component('mail::button', ['url' => "https://targiehandlu.pl/speaking"])
Chcę zostać Prelegentem na Targach eHandlu
@endcomponent

@endcomponent


Z pozdrowieniami,

Karolina Michalak


**[Konfiguracja newslettera]({{ $unsubscribe }})**

@endcomponent









