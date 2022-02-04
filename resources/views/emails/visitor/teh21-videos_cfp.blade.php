

@component('mail::message')
 
# Dzień dobry {{ $p->translate("[[fname]]") }},

Kolejne Targi eHandlu odbędą się **14 kwietnia na EXPO XXI w Warszawie.**

Aktualnie pracujemy nad agendą wystąpień - jeszcze 2 dni czekamy na propozycje.

Konsekwentnie udostępniamy nagrania video z jubileuszowej 20. edycji Targów, która odbyła się w październiku.





<table>
    <tr><td>test</td><td>test2</td></tr>
</table>

@component('mail::button', ['url' => "https://targiehandlu.pl/visit?fname=" . $p->translate("[[fname]]") . "&lname=" . $p->translate("[[lname]]") . "&cname2=" . $p->translate("[[cname2]]") . "&position=" . $p->translate("[[position]]")."&email=".$p->translate("[[email]]")])
Zgłoś chęć zostania prelegentem 21. Targów eHandlu
@endcomponent

Z pozdrowieniami,

Karolina Michalak

Adam Zygadlewicz


**[Konfiguracja newslettera]({{ $unsubscribe }})**

@endcomponent









