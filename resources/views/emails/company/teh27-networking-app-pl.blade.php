@component('mail::message')

# Cześć {{ array_get($profile, "fname") }},

Mamy dla Ciebie ekscytującą wiadomość!  

Przedstawiamy **nową platformę networkingową** - ecwe.pl, która ułatwi nawiązywanie kontaktów i pomoże Ci osiągnąć maksymalne korzyści z udziału w Targach. 

# Co nowego?

Każdy zarejestrowany przedstawiciel firmy otrzymuje **indywidualne konto** z dostępem do wszystkich narzędzi networkingowych. 

**Kluczowe funkcje platformy:**

- **Przeglądanie listy uczestników** – przeglądaj uczestników i wysyłaj im zaproszenia do kontaktu (każdy przedstawiciel ma do dyspozycji 50 zaproszeń).

- **Czaty z uczestnikami** – po akceptacji zaproszenia, kontynuuj rozmowę we **wbudowanym czacie** i umawiaj spotkania.

- **Zaproszenia VIP** – (funkcja dostępna wkrótce) zapraszaj kluczowych partnerów na Targi.  

- **Skanowanie identyfikatorów** – podczas wydarzenia skanuj kody QR innych uczestników, aby szybko wymieniać się danymi kontaktowymi. 

@component('mail::panel')
# Jak zacząć?

W Panelu Wystawcy znajdziesz **indywidualne linki logujące** do platformy networkingowej dla każdego z przedstawicieli firmy. Przedstawiciele oznaczani jako *visible* są widoczni w platformie i mogą z niej aktywnie korzystać. 

**Prześlij te linki swoim koleżankom i kolegom z zespołu** – platforma jest gotowa do użycia. :)

@component('mail::button', ['url' => $accountUrlReps])
Przejdź do Panelu Wystawcy i pobierz linki logujące
@endcomponent
@endcomponent

Jeśli masz pytania lub potrzebujesz pomocy w korzystaniu z platformy, jestem do Twojej dyspozycji.

Pozdrowienia,  
{{$footer}}

@endcomponent