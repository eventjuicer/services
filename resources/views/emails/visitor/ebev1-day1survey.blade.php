

@component('mail::message')


# Hi  {{ $p->translate("[[fname]]") }},

We have just finished the **first exciting day of the E-commerce Berlin Virtual 2021**. 

We hope that you enjoyed the sessions and you're looking forward to the second day of the event. 

Thank you for so many inspirational talks and exchanges of experience on the Discord channels! 

## Help us to select the best speakers from today's sessions! 

@component('mail::button', ['url' => "https://forms.gle/S9vUtvFxHkE3E5Hr6"])
Fill in the survey
@endcomponent

**We can't wait to see you tomorrow on the second day of the event. Livestream starts at 9AM**

<hr />

# Hallo  {{ $p->translate("[[fname]]") }},

Wir haben gerade **den ersten Tag der E-commerce Berlin Virtual** über die Bühne gebracht. 

Wir hoffen, dass euch die Vorträge gefallen haben und wir können kaum den morgigen Tag abwarten.

Vielen Dank für die ganzen Inspirationen und den regen Austausch in den Discord Channels. 

Jetzt seid ihr gefragt! 

@component('mail::button', ['url' => "https://forms.gle/S9vUtvFxHkE3E5Hr6"])
Helft uns die Präsentation des Tages zu wählen 
@endcomponent

**Wir freuen uns euch Morgen zum 2. Teil des Events zu sehen. Der Stream beginnt um 9 Uhr**


@endcomponent



