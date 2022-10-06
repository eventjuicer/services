

@component('mail::message')

Cześć {{ $p->translate("[[fname]]") }}!

## Właśnie opublikowaliśmy [listę prezentacji na scenach A i D](https://targiehandlu.pl/schedule)

[Sprawdź!](https://targiehandlu.pl/schedule)

@component('mail::panel')
Przypominamy, że 22. Targi eHandlu odbędą się **27 października w EXPO XXI w Warszawie.**
@endcomponent



@endcomponent



