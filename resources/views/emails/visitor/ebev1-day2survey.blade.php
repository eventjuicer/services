

@component('mail::message')


# Hi  {{ $p->translate("[[fname]]") }},

We have just finished the second exciting day of the E-commerce Berlin Virtual edition 2021. 

We hope you enjoyed it as much as we did! 

**Our goal is to curate the best possible event for you each edition.** To do this, **we rely on your feedback!** 

Help us to select the best speakers from the second day sessions!

@component('mail::button', ['url' => "https://forms.gle/AHN5UjBSC6WDj8ss9"])
Fill in the survey
@endcomponent

<hr />

# Hallo  {{ $p->translate("[[fname]]") }},

Wir haben gerade den zweiten aufregenden Tag der E-Commerce Berlin Virtual Edition 2021 beendet.

Wir hoffen, es hat Euch genauso gut gefallen wie uns!

**Unser Ziel ist es, für jede Ausgabe das bestmögliche Event für Euch zu organisieren. Dazu verlassen wir uns auf Euer Feedback! **

@component('mail::button', ['url' => "https://forms.gle/AHN5UjBSC6WDj8ss9"])
Helft uns die Präsentation des Tages zu wählen 
@endcomponent


@endcomponent



