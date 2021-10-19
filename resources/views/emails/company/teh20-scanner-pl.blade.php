

@component('mail::message')
 
# Cześć

Kilka słów o skanowaniu identyfikatorów Zwiedzających w celu pozyskania ich danych kontaktowych.

Dane kontaktowe Zwiedzających odwiedzających stoisko Twojej firmy może pozyskiwać każdy reprezentant firmy posiadający smartfona.

## iphone / iOS

Skanujemy kod QR na identyfikatorze przy pomocy aparatu smartfona. Po zeskanowaniu pojawi się sugestia uruchomienia adresu URL - należy go uruchomić. Przy pierwszym skanie będzie trzeba wybrać nazwę swojej firmy. Każde kolejne skanowanie to użycie aparatu i uruchamianie adresu URL zakodowanego w kodzie QR. Dodawanie komentarzy jest opcjonalne.

## Android

Skanujemy kod QR na identyfikatorze przy pomocy opcji Google Lens w aparacie smartfona lub za pomocą aplikacje Skaner. Po zeskanowaniu pojawi się sugestia uruchomienia adresu URL - należy go uruchomić. Przy pierwszym skanie będzie trzeba wybrać nazwę swojej firmy. Każde kolejne skanowanie to użycie aparatu jw. i uruchamianie adresu URL zakodowanego w kodzie QR. Dodawanie komentarzy jest opcjonalne.

**Wszystkie dane kontaktowe lądują bezzwłocznie w panelu wystawcy w zakładce "Twoje Skany"** Aby zobaczyć pełne dane kontaktowe oraz dodane komentarze musisz użyć funkcji eksportu.

@component('mail::button', ['url' => $accountUrl])
Dostęp do Twojego konta Wystawcy
@endcomponent

Regards, 

Karolina Michalak

Adam Zygadlewicz

@endcomponent

