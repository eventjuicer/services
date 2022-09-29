@component('mail::message')
 
# Dzień dobry {{ $p->translate("[[fname]]") }},

Dzisiaj **ostatni dzień** na Twoją decyzję dotyczącą kształtu agendy 22. Targów eHandlu!

## 153 Ekspertów czeka na Twoją przychylność i [oddanie głosu](https://targiehandlu.pl/vote). Pomożesz?


<a href="https://targiehandlu.pl/vote" target="_blank">
    <img src="https://res.cloudinary.com/eventjuicer/image/upload/w_450,h_450,c_limit,f_auto/v1664453760/team/teh22_cfp_submitters.png" alt="strona głosowania" />
</a>


@component('mail::panel')

@component('mail::button', ['url' => "https://targiehandlu.pl/vote"])
Chcę ustalić agendę
@endcomponent

@endcomponent

*W ramach podziękowań za Twój czas, udostępniamy **kolejną porcję nagrań video** z 21. edycji Targów, która odbyła się w kwietniu. *

<table style="font-family:Avenir,Helvetica,sans-serif;box-sizing:border-box;color:#74787e;font-size:16px;line-height:1.5em;margin-top:0;text-align:left;border-spacing:30px;">
    <tr>
        <td><img src="https://res.cloudinary.com/eventjuicer/image/upload/w_200,h_200,c_limit,f_auto/v1638433793/c_1962_logotype.png" alt="" /></td>
        <td> Bartosz Hnatyszyn - Dyrektor Zarządzający @ Direct Link Worldwide
            <strong><a href="https://ehandel.com.pl/skandynawia-jak-sprawnie-dostarczac-przesylki-na-tym-rynku,2256">
            Skandynawia - jak sprawnie dostarczać przesyłki na tym rynku?
        </a></strong>
       
    </td>
    </tr>
    <tr>
        <td><img src="https://res.cloudinary.com/eventjuicer/image/upload/w_200,h_200,c_limit,f_auto/v1633672146/c_1893_logotype.png" alt="" /></td>
        <td> Artur Pajkert - head of marketing @ cyber_Folks S.A.
            <strong><a href="https://ehandel.com.pl/sklep-odporny-na-wybuch-nuklearny-i-na-co-jeszcze,2255">
            Sklep odporny na wybuch nuklearny. I na co jeszcze?
        </a></strong>
       
    </td>
    </tr>
    <tr>
        <td><img src="https://res.cloudinary.com/eventjuicer/image/upload/w_200,h_200,c_limit,f_auto/v1647429353/c_1145_logotype.png" alt="" /></td>
        <td> Marcin Gnybek Senior UI/UX e-Commerce Designer @ 2ClickShop
            <strong><a href="https://ehandel.com.pl/jak-warsztatowo-zrealizowac-e-commerce-b2b-juz-w-6-tygodni-growth-hacking-z-ladowaniem-w-chmurze,2258">
            Jak warsztatowo zrealizować e-Commerce B2B już w 6 tygodni? Growth Hacking z lądowaniem w chmurze.
        </a></strong>
       
    </td>
    </tr>
    <tr>
        <td><img src="https://res.cloudinary.com/eventjuicer/image/upload/w_200,h_200,c_limit,f_auto/v1647586818/c_1137_logotype.jpg" alt="" /></td>
        <td> Anna Rak - Head of ACT Poland @ Trusted Shops
            <strong><a href="https://ehandel.com.pl/jak-zmniejszyc-koszt-reklam-e-sklepu-w-google-4-proste-sposoby,2231">
            Jak zmniejszyć koszt reklam e-sklepu w Google - 4 proste sposoby
        </a></strong>
       
    </td>
    </tr>

    <tr>
        <td><img src="https://res.cloudinary.com/eventjuicer/image/upload/w_200,h_200,c_limit,f_auto/v1523973368/c_1245_logotype.png" alt="" /></td>
        <td> Dawid Dziadkowiec - Account Executive @ edrone
            <strong><a href="https://ehandel.com.pl/znamy-sie-jak-lyse-konie-czyli-jak-sprawic-by-klienci-wracali-do-twojego-e-sklepu-kupowali-wiecej-i-polecali-cie-innym,2230">        
Znamy się jak łyse konie. Czyli jak sprawić, by klienci wracali do Twojego e-sklepu, kupowali więcej i polecali Cię innym?
        </a></strong>
       
    </td>
    </tr>

</table>







Z pozdrowieniami,

Karolina Michalak


**[Konfiguracja newslettera]({{ $unsubscribe }})**

@endcomponent









