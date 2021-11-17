

@component('mail::message')
 
# Hallo {{ array_get($profile, "fname") }},

Wir freuen uns euch mitteilen zu können, dass die 5. **Ausgabe der E-Commerce Germany Awards gestartet ist!** Du kannst bereits dein Unternehmen für diesen prestigeträchtigen Wettbewerb anmelden und von einer ausgewählten Jury bestehend aus Branchenführern und Experten ausgezeichnet werden.

Die E-Commerce Germany Awards sind eine fantastische Gelegenheit, die Exzellenz, Kreativität und Leistungen von E-Commerce-Unternehmen auf dem deutschen Markt zu würdigen.

Selbst die Teilnahme kann eurem Unternehmen helfen, die Brand Awareness zu steigern und bei potenziellen Neukunden auf dem Radar aufzutauchen. Durch eure Teilnahme könnt ihr auch Klarheit über eure Ziele und Ambitionen schaffen und euch mit euren Mitbewerbern vergleichen.

Könnte es noch verlockender werden? **Als Aussteller der Expo kannst du völlig kostenlos an dem Wettbewerb teilnehmen und euren Bekanntheitsgrad in der E-Commerce-Branche erhöhen!**

Um dein Unternehmen anzumelden, klicke einfach auf den unten stehenden Link.

@component('mail::button', ['url' => "https://ecommercegermanyawards.com"])
Melde dein Unternehmen an
@endcomponent

**Die Deadline für die Anmeldung ist der 26. November 2021.**

Falls du noch Fragen hast, melde dich gerne bei mir!
 
Beste Grüße, 

{{$footer}}

@endcomponent