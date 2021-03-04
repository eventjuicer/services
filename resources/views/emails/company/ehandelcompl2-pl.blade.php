

@component('mail::message')
 
# Dzień dobry {{ array_get($profile, "fname") }},

Po bardzo udanym starcie [ehandel.com.pl](https://ehandel.com.pl/) (kilkanaście nowych marek publikujących swoje  artykuły i notki prasowe) kompletujemy **radę Ekspertów**.

@component('mail::panel')

Jeśli w Twojej firmie znajdują się osoby chętne do **okresowego komentowania trendów rynkowych** - serdecznie zapraszamy do współpracy. 

Prosimy także o dane kontaktowe do osoby, z którą można kontaktować się w temacie oferty firmy - wykorzystamy Jej głos przy tworzeniu artykułów dot. konkretnych grup usług lub produktów.

@component('mail::button', ['url' => 'https://docs.google.com/forms/d/e/1FAIpQLSem6zookmmZIfdVwzz82R8SAFKk3um9CLCBplPgf06n8lqG3w/viewform'])
Dodaj Ekspertów
@endcomponent

@endcomponent

Dziękujemy za wszystkie wstępne sugestie dotyczące działania [ehandel.com.pl](https://ehandel.com.pl/). Kolejne **sugestie dotyczące kierunku rozwoju** i atrakcyjności tej platformy dla dostawców usług i produktów dla e-commmerce można wysłać przez [ankietę](https://docs.google.com/forms/d/e/1FAIpQLSem6zookmmZIfdVwzz82R8SAFKk3um9CLCBplPgf06n8lqG3w/viewform).

Przypominamy, że **publikacja jest bezpłatna.** Zachęcamy do nadsyłania materiałów na **redakcja@ehandel.com.pl** (lub przekazania adresu działowi/agencji PR żeby dodał nas do swojej listy wysyłkowej)


Z pozdrowieniami,

Karolina Michalak


@endcomponent