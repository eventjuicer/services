@component('mail::message')
 
# Hallo {{ array_get($profile, "fname") }},

Wir freuen uns, Dir als Erster mitzuteilen, **dass die 8. Ausgabe der E-commerce Germany Awards** vor der Tür steht! Offiziell beginnen die Einreichungen am 2. Dezember, aber als geschätzter Aussteller kannst Du Dein Produkt oder Deine Dienstleistung schon vor allen anderen einreichen.

Die Awards zeichnen die besten Dienstleister im E-Commerce aus und bieten eine Plattform, um Lösungen vorzustellen und Technologien zu feiern, die Online-Händler und Marken stärken.

Nutze die Chance, Dein Produkt kostenlos zu bewerben! Gewinner profitieren von Aufmerksamkeit auf Newsportalen, in den sozialen Medien und bei der prestigeträchtigen **Preisverleihung** im Rahmen unseres **Networking-Events**. Die Teilnahme ist für Aussteller kostenlos – also warte nicht zu lange, der Einsendeschluss ist der **20. Dezember 2024!**

@component('mail::button', ['url' => "https://ecommercegermanyawards.com"])
Melde dein Unternehmen an
@endcomponent

Das Finale des Wettbewerbs endet mit der Preisverleihung und Networking-Party am **19. Februar 2025**, zwischen den beiden Expo-Tagen. Dies ist Deine Chance, Erfolge zu feiern, in entspannter Atmosphäre Kontakte zu knüpfen und mit etwas Glück die Auszeichnung mit nach Hause zu nehmen!

Warum alleine kommen? Aktuell kannst Du von einem zeitlich begrenzten Ticket-Angebot profitieren. Regulär kostet ein Ticket 129 EUR, doch vom **26. November bis 2. Dezember** erhältst Du:

- 2 Tickets für nur 200 EUR 
- 3 Tickets für nur 270 EUR

Dieses exklusive Angebot endet am 2. Dezember – lade Deine Kolleg ein und nutze diesen einzigartigen Abend optimal. Feiere, vernetze Dich und baue Dein Netzwerk aus!

@component('mail::button', ['url' => $accountUrlVouchers])
Sichere dir jetzt deine Tickets!
@endcomponent

Falls du noch Fragen hast, melde dich gerne bei mir!
 
Beste Grüße, 

{{$footer}}

@endcomponent
