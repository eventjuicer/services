

@component('mail::message')
 
# Hallo {{ array_get($profile, "fname") }},

Wir freuen uns euch mitteilen zu können, dass die 6. **Ausgabe der E-Commerce Germany Awards gestartet ist!** Du kannst bereits dein Unternehmen für diesen prestigeträchtigen Wettbewerb anmelden und von einer ausgewählten Jury bestehend aus Branchenführern und Experten ausgezeichnet werden.

Die E-Commerce Germany Awards sind eine fantastische Gelegenheit, die Exzellenz, Kreativität und Leistungen von E-Commerce-Unternehmen auf dem deutschen Markt zu würdigen.

Die Teilnahme an den E-Commerce Germany Awards ist eine große Chance, die Bekanntheit in der Industrie und die Brand Awareness bei potenziellen Kunden und Konkurrenten zu steigern, Mitarbeiter zu motivieren und Euer Unternehmen zu einem Ziel für Top-Talente zu machen!

Könnte es noch verlockender werden? **Als Aussteller der Expo kannst du völlig kostenlos an dem Wettbewerb teilnehmen und euren Bekanntheitsgrad in der E-Commerce-Branche erhöhen!**

Um dein Unternehmen anzumelden, klicke einfach auf den unten stehenden Link.

@component('mail::button', ['url' => "https://ecommercegermanyawards.com"])
Melde dein Unternehmen an
@endcomponent

**Die Deadline für die Anmeldung ist der 6. Januar 2023.**

Falls du noch Fragen hast, melde dich gerne bei mir!
 
Beste Grüße, 

{{$footer}}

@endcomponent