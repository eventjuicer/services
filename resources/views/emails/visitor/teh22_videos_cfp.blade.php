

@component('mail::message')
 
# Dzień dobry {{ $p->translate("[[fname]]") }},

Kolejne Targi eHandlu odbędą się **27 października na EXPO XXI w Warszawie.**

Aktualnie pracujemy nad agendą wystąpień. 

**Chcesz wystąpić? Deadline na zgłoszenie mija dzisiaj - informacje poniżej!**

Udostępniamy pierwszą porcję nagrań video z 21. edycji Targów, która odbyła się w kwietniu. 


<table style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;color:#74787e;font-size:16px;line-height:1.5em;margin-top:0;text-align:left;border-spacing:30px;">
    <tr>
        <td><img src="https://res.cloudinary.com/eventjuicer/image/upload/w_300,h_300,c_limit,f_auto/v1633698528/c_1283_logotype.jpg" alt="" /></td>
        <td>Damian Wiszowaty - CEO Gonito 
            <strong><a href="https://ehandel.com.pl/rydwany-ognia-czyli-jak-wykorzystac-synergie-modeli-seller-i-vendor-w-serwisie-amazon,2202">Rydwany ognia, czyli jak wykorzystać synergię modeli Seller i Vendor w serwisie Amazon</a></strong>
       
    </td>
    </tr>
    <tr>
        <td><img src="https://res.cloudinary.com/eventjuicer/image/upload/w_300,h_300,c_limit,f_auto/v1582620906/c_1705_logotype.png" alt="" /></td>
        <td>Piotr Buszka - co-founder & CEO - feeCOMPASS 
            <strong><a href="https://ehandel.com.pl/wirtualny-doradca-jak-poprawic-zadowolenie-klientow-i-konwersje-w-twoim-sklepie,2197">Wirtualny doradca. Jak poprawić zadowolenie klientów i konwersję w Twoim sklepie?</a></strong>
        </td>
    </tr>
    <tr>
        <td><img src="https://res.cloudinary.com/eventjuicer/image/upload/w_300,h_300,c_limit,f_auto/v1597311044/c_1726_logotype.png" alt="" /></td>
        <td>Mateusz Wróbel - Head of Sales - LivePrice 
            <strong><a href="https://ehandel.com.pl/zwiekszenie-sprzedazy-dzieki-automatyzacji-cen-w-sklepie,2195">Zwiększenie sprzedaży dzięki automatyzacji cen w sklepie</a></strong>
        </td>
    </tr>
    <tr>
        <td><img src="https://res.cloudinary.com/eventjuicer/image/upload/w_300,h_300,c_limit,f_auto/v1554133278/c_1462_logotype.jpg" alt="" /></td>
        <td>Krzysztof Marzec - CEO - DevaGroup 
            <strong><a href="https://ehandel.com.pl/7-najczestszych-sposobow-przepalania-budzetu-w-google,2193">7 najczęstszych sposobów przepalania budżetu w Google</a></strong>
        </td>   
    </tr>
</table>

@component('mail::panel')

## Chcesz wystąpić na jednej ze scen 22. Targów eHandlu? Termin zgłoszeń mija 14 września o 23:59.

@component('mail::button', ['url' => "https://targiehandlu.pl/speaking"])
Chcę zostać Prelegentem na Targach eHandlu
@endcomponent

@endcomponent





Z pozdrowieniami,

Karolina Michalak


**[Konfiguracja newslettera]({{ $unsubscribe }})**

@endcomponent









