@component('mail::message')
 
# Hallo {{ array_get($profile, "fname") }},

Wir haben etwas Besonderes für dich vorbereitet! Dieses Jahr können die Aussteller während der Expo ganz einfach die Kontaktdaten der Besucher scannen.

## Wie? Super einfach! 

Es ist nicht nötig, eine spezielle App oder einen Scanner herunterzuladen. Die Kontaktdaten der Besucher können von jedem Vertreter eures Standes einfach mit dem Smartphone erfasst werden, indem sie die QR-Codes auf den Badges scannen.

## Wie fange ich an?

Öffne einen Browser auf dem Smartphone. Gehe zu [https://expojuicer.com](https://expojuicer.com) und wähle euren Firmennamen aus der Liste aus. Nach der Nachricht 'Fertig!' kannst du den Browser schließen und mit dem Scannen der Besucher-IDs beginnen!

### iphone / iOS

Verwende die Kamera des Smartphones, um den QR-Code auf dem Besucherbadge zu scannen. In der Benachrichtigung wird man aufgefordert, die URL zu öffnen - bitte tue dies. Bei jedem weiteren Scan muss man einfach die Kamera verwenden und die im QR-Code gespeicherte URL öffnen. 

### Android

Scanne den QR-Code auf dem Besucherbadge mit der Google Lens in der Kamera deines Smartphones oder mit einer Scanner-App. In der Benachrichtigung wird man aufgefordert, die URL zu öffnen - bitte tue dies. Bei jedem weiteren Scan muss man einfach die Kamera wie oben beschrieben verwenden und die im QR-Code gespeicherte URL öffnen. 

Optional kann man auch Kommentare hinzufügen.

**Alle gesammelten Kontaktdaten werden sofort in eurem Ausstellerprofil unter „Meine Scans“ gespeichert.** Um alle Kontaktdaten und die Kommentare zu sehen, sollte man die Exportfunktion nutzen.

@component('mail::button', ['url' => $accountUrl])
Öffne dein Ausstellerprofil
@endcomponent 

Bei Fragen stehe ich gerne zur Verfügung!

Schöne Grüße,

{{$footer}}

@endcomponent