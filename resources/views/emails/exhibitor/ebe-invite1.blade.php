

@component('mail::message')



<div style="text-align: center;">
	<a href="{{$promolink}}" target="_blank"><img_url='https://res.cloudinary.com/ecommerceberlin/image/upload/v1648205241/6_get_your_ticket_646x220.png' alt="" style="margin-top: 10px; margin-bottom: 30px; max-height: 250px;"></a>
</div>


# Hallo,

## Wir wollten dich wissen lassen, dass {{  array_get($companydata, "name") }} bei der kommenden E-commerce Berlin Expo am **05.05.2022** in der STATION Berlin (Luckenwalder Str. 4-6) ausstellen wird.

Diese E-Mail soll als persönliche Einladung unsererseits verstanden werden. Wir hoffen dich an unserem Stand begrüßen zu dürfen!

##Warum lohnt sich ein Besuch?

Entscheidungsträger aus dem Digitalen Commerce, Marketing und Innovation werden sich bei der E-commerce Berlin Expo versammeln. Über **200 Aussteller** und **50 führende Experten** werden innovative und zukunftsorientierte Lösungen und Trends präsentieren.

Experten von **Zalando, MediaMarktSaturn, Douglas, NBB, KaDeWe, TUI, MyToys, Otto** werden euch neue Wege ebnen, um den Wachstum eures Geschäfts zu fördern.

Die E-commerce Berlin Expo ist eure Chance um auf den neuesten Stand zu kommen und zukunftsorientierter zu agieren.

Die Teilnahme und das damit verbundene Networking, der gemeinsame Dialog als auch die Inspirationsgestaltung sind kostenlos. Hole dir jetzt dein Ticket und besuche uns auf unserem Stand!

@component('mail::button', ['url' => $promolink])
	Klick hier, um dich für ein kostenloses Ticket zu registrieren
@endcomponent

Hast du die Agenda bereits gesehen? Wenn nicht, dann klick auf: [https://ecommerceberlin.com/schedule](https://ecommerceberlin.com/schedule)

**Die Expo als auch die Konferenz sind kostenlos.** Jedoch müssen die Besucher sich vorab auf der Homepage registrieren.

Egal, vor welcher E-commerce-Herausforderung du stehst, du und deine Kollegen bekommen einen herzlichen Empfang, E-commerce-Experten und die beste Beratung unter einem Schirm!

Wir freuen uns dich zu treffen! 

Mit freundlichen Grüßen,


@endcomponent


