

@component('mail::message')
 
# Dzień dobry {{ $p->translate("[[fname]]") }},

Kolejne Targi eHandlu odbędą się **11 kwietnia na EXPO XXI w Warszawie.**

Intensywnie pracujemy nad agendą wystąpień. **Chcesz wystąpić? informacje poniżej!**

Udostępniamy pierwszą porcję nagrań video z ubiegłorocznej - jesiennej - edycji Targów eHandlu.


<table style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;color:#74787e;font-size:16px;line-height:1.5em;margin-top:0;text-align:left;border-spacing:30px;">

<tr>
        <td><img src="https://res.cloudinary.com/eventjuicer/image/upload/w_450,h_450,c_limit,f_auto/v1523520187/c_1132_logotype.png" alt="" /></td>
        <td> Filip Biszczak - Sempai
            <strong><a href="https://ehandel.com.pl/co-po-i-zyli-dlugo-i-szczesliwie-dos-and-donts-w-relacji-klient-agencja,2323">Co po "i żyli długo i szczęśliwie"? Do’s and don’ts w relacji klient ↔ agencja</a></strong>
       
    </td>
    </tr>

    
    <tr>
        <td><img src="https://res.cloudinary.com/eventjuicer/image/upload/w_450,h_450,c_limit,f_auto/v1695650180/c_1192_logotype.png" alt="" /></td>
        <td> Mateusz Osiecki - PrestaShop
            <strong><a href="https://ehandel.com.pl/dlaczego-duze-i-zaawansowane-sklepy-wybieraja-prestashop-poznaj-historie-ich-sukcesu,2322">Dlaczego duże i zaawansowane sklepy wybierają PrestaShop? Poznaj historię ich sukcesu.</a></strong>
       
    </td>
    </tr>


    <tr>
        <td><img src="https://res.cloudinary.com/eventjuicer/image/upload/w_450,h_450,c_limit,f_auto/v1695738818/c_2422_logotype.jpg" alt="" /></td>
        <td> Krzysztof Szyszkiewicz - Valueships
            <strong><a href="https://ehandel.com.pl/pricing-w-sluzbie-cross-sellu-maksymalizacja-profitu-w-twoim-sklepie,2319">Pricing w służbie cross-sellu - maksymalizacja profitu w Twoim sklepie</a></strong>
       
    </td>
    </tr>


    <tr>
        <td><img src="https://res.cloudinary.com/eventjuicer/image/upload/w_450,h_450,c_limit,f_auto/v1695992102/c_2338_logotype.jpg" alt="" /></td>
        <td> Jan Kinal - Giełda Tekstów
            <strong><a href="https://ehandel.com.pl/na-co-uwazac-przy-tworzeniu-opisow-produktow-z-ai,2315">
Na co uważać przy tworzeniu opisów produktów z AI?</a></strong>
       
    </td>
    </tr>


    
    

  

</table>



@component('mail::panel')

## Chcesz wystąpić na jednej ze scen wiosennych Targów eHandlu? Termin zgłoszeń kończy się w piątek - 2 lutego!

@component('mail::button', ['url' => "https://targiehandlu.pl/speaking"])
Chcę zostać Prelegentem na Targach eHandlu
@endcomponent

@endcomponent


Z pozdrowieniami,

Karolina Wojtas


**[Konfiguracja newslettera]({{ $unsubscribe }})**

@endcomponent









