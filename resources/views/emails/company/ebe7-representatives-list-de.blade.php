@component('mail::message')
 
# Hallo {{ array_get($profile, "fname") }} ,

**Zur deiner Information: Auf der Ausstellerplattform kannst du die Vertreter deiner Firma hinzufügen, ändern oder löschen. Bitte beachte aber, dass nur eingetragene Firmenvertreter gedruckte Ausweise haben werden.**

Die maximale Zahl der Firmenvertreter hängt von der jeweiligen Kategorie des Ausstellerpakets ab:

9 m² STANDARD Ausstellungsfläche - 2 Vertreter

9 m² HOT, SUPER HOT, ULTRA Ausstellungsfläche - 4 Vertreter

18 m² Ausstellungsfläche - 6 Vertreter

# Die Frist hierfür ist der 10. Februar 2023. 

Im Folgenden sind die bereits eingetragene Vertreter aufgelistet:

@forelse($representatives as $rep)

	{{$rep->translate("[[fname]] [[lname]] [[position]]")}}

@empty

**Noch nicht bestimmt!**

@endforelse

@component('mail::button', ['url' => $accountUrlReps])
Zugang zum Aussteller Konto
@endcomponent

Alle Vertreter erhalten einen personalisierten Ausweis, ein Schlüsselband und einen Catering-Gutschein im Willkommenspaket, das am Informationsstand für Aussteller vor Ort abgeholt werden kann.

Bitte denke daran, dass:

Jedes Ausstellerpaket besteht aus der Anzahl von Ausstellerausweisen und Catering-Gutscheinen, die der Anzahl der angemeldeten Vertreter entspricht.

**Wenn du mehr Vertreter** eintragen möchtest, musst du zusätzliche Catering-Gutscheine (25 EUR netto/Person) kaufen [auf deiner Ausstellerplatform.]($accountUrlVouchers)

Hast du noch Fragen? Dann lass mich bitte wissen!

Viele Grüße,

{{$footer}}

@endcomponent
