

@component('mail::message')
 
# Dzień dobry {{ $p->translate("[[fname]]") }},

Kolejne Targi eHandlu odbędą się **14 kwietnia na EXPO XXI w Warszawie.**

Aktualnie pracujemy nad agendą wystąpień - jeszcze 2 dni czekamy na propozycje.

Konsekwentnie udostępniamy nagrania video z jubileuszowej 20. edycji Targów, która odbyła się w październiku.

<img src="{{ $cloudinary('https://res.cloudinary.com/eventjuicer/image/upload/v1613654859/c_1142_logotype.png') }}" />

<table style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;color:#74787e;font-size:16px;line-height:1.5em;margin-top:0;text-align:left">
    <tr>
        <td>Damian Wiszowaty - CEO Gonito <strong>Rydwany ognia, czyli jak wykorzystać synergię modeli Seller i Vendor w serwisie Amazon.</strong></td>
        <td>https://ehandel.com.pl/rydwany-ognia-czyli-jak-wykorzystac-synergie-modeli-seller-i-vendor-w-serwisie-amazon,2202</td>
    </tr>
    <tr>
    <td>Piotr Buszka - co-founder & CEO - feeCOMPASS "Wirtualny doradca. Jak poprawić zadowolenie klientów i konwersję w Twoim sklepie?"</td>
    <td>https://ehandel.com.pl/wirtualny-doradca-jak-poprawic-zadowolenie-klientow-i-konwersje-w-twoim-sklepie,2197</td>
    </tr>
    <tr>
        <td>Mateusz Wróbel - Head of Sales - LivePrice <strong>Zwiększenie sprzedaży dzięki automatyzacji cen w sklepie</strong></td>
        <td>https://ehandel.com.pl/zwiekszenie-sprzedazy-dzieki-automatyzacji-cen-w-sklepie,2195</td>
    </tr>
    <tr>
        <td>Krzysztof Marzec - CEO - DevaGroup <strong>7 najczęstszych sposobów przepalania budżetu w Google</strong></td>
        <td>https://ehandel.com.pl/7-najczestszych-sposobow-przepalania-budzetu-w-google,2193</td>
    </tr>
</table>

@component('mail::button', ['url' => "https://targiehandlu.pl/speaking" . $p->translate("[[fname]]") . "&lname=" . $p->translate("[[lname]]") . "&cname2=" . $p->translate("[[cname2]]") . "&position=" . $p->translate("[[position]]")."&email=".$p->translate("[[email]]")])
Zgłoś chęć zostania prelegentem 21. Targów eHandlu
@endcomponent


<table style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;color:#74787e;font-size:16px;line-height:1.5em;margin-top:0;text-align:left">
    <tr>
        <td>Paweł Zakielarz - CEO - Global24 <strong>Czy warto sprzedawać do UK?</strong></td>
        <td>https://ehandel.com.pl/czy-warto-sprzedawac-do-uk,2189</td>
    </tr>
    <tr>
        <td>Kacper Gugała - Business Development Manager Poland - Shopware <strong>Unikalny sklep. Jak pozostać w świadomości Klienta?</strong></td>
        <td>https://ehandel.com.pl/uxcro-w-e-commerce-czyli-jak-przepalic-budzet-reklamowy,2184</td>
    </tr>
    <tr>
        <td>Kamil Bolek - CMO - LTTM <strong>Vlogmas, prezentownik, a może haul? Jak wykorzystać potencjał influencerów w przedświątecznym szale zakupowym</strong></td>
        <td>https://ehandel.com.pl/vlogmas-prezentownik-a-moze-haul-jak-wykorzystac-potencjal-influencerow-w-przedswiatecznym-szale-zakupowym,2180</td>
    </tr>
    <tr>
        <td>Paweł Piotuch - Chief Retention Officer - IdoSell <strong>Co pomaga uruchomić sklep szybko i tanio, a w jakim przypadku wdrożenie przekroczy budżet i się nie uda?</strong></td>
        <td>https://ehandel.com.pl/co-pomaga-uruchomic-sklep-szybko-i-tanio-a-w-jakim-przypadku-wdrozenie-przekroczy-budzet-i-sie-nie-uda,2179</td>
    </tr>
</table>


Z pozdrowieniami,

Karolina Michalak


**[Konfiguracja newslettera]({{ $unsubscribe }})**

@endcomponent









