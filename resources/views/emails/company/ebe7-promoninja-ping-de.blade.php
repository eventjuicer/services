@component('mail::message')

Hallo {{ array_get($profile, "fname")  }}, 

Die maximale Rendite eurer Investition auf der Messe hängt nicht nur von der Lage oder der Attraktivität des Standes ab! :) Es ist entscheidend, Interesse zu wecken und den Verkehr zu eurem Stand zu lenken, indem ihr für Aufregung rund um eure Teilnahme an der Veranstaltung sorgt.


**Nutzt die von uns bereitgestellten Tools, um eure Dienstleistungen dem Publikum zu präsentieren**. Schaut euch an, was wir zu bieten haben:


@component('mail::panel')

**VIP-Einladungen** (Ladet eure wichtigsten Partner und Interessenten zur Teilnahme an der Expo ein und verwöhnt sie mit dem Zugang zur exklusiven VIP-Zone mit Sofas und Erfrischungen)
 
**Ausstellerprofil** (Teilt euer Ausstellerprofil auf euren Social-Media-Kanälen, um eure Fläche in der Mappe zu präsentieren und Einladungsanfragen für Meetings von den potentiellen Kunden zu erhalten)

**Zugriff auf die Liste der registrierten Teilnehmer** (Durchsucht die Liste der aktuell registrierten Besucher und sendet Meetingeinladungen, um Termine am Tag der Expo zu planen)

@endcomponent

**Alle diese Funktionen sind im Aussteller-Profil verfügbar und warten darauf, von euch genutzt zu werden!**

Ein kurzes Update: 

# VIP Einladungen 

Der Top-Verteiler der VIP-Einladungen ist derzeit **WOW24-7** - Wow!

@component('mail::button', ['url' => $accountUrlVips])
Versende VIP-Einladungen an Partner und Kunden
@endcomponent

# Ausstellerprofil

Die TOP 5 (13:40 Uhr) Unternehmen, die aktiv für ihre Präsenz auf der Expo werben und unsere Tools nutzen (mit zusätzlichen Dienstleistungen belohnt!), sind:

* Foxintelligence

* BigBuy

* iteo S.A.

* Allegro Sp. z o.o.

* Outvio OÜ

**Wir freuen uns sehr, dass ihr die Bedeutung der Lead-Generierung versteht und unsere Tools nutzt, um eure Präsenz auf der Veranstaltung zu maximieren!**

@component('mail::button', ['url' => $accountUrlPromote])
Siehe Werbematerialien und Ranking-Seite
@endcomponent

@component('mail::panel')

An alle anderen da draußen, ihr habt noch Zeit, für eure Präsenz bei unserer Veranstaltung zu werben! **Am einfachsten geht das, indem ihr einfach den folgenden Link mit eurer PR- & Social-Media-Abteilung teilt** (Zugriff auf das restliche Aussteller-Panel ausgenommen).

{!! $accountUrlPromotePublic !!}

@endcomponent



Liebe Grüße, 

{{$footer}}

@endcomponent

