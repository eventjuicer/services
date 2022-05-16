

@component('mail::message')
 
# Hi {{ array_get($profile, "fname")  }},

Once again a big thank you for participating in the EBE 2022!

In case you haven’t filled out the feedback survey yet, we’d greatly appreciate you taking your time and sharing your opinion with us: 

@component('mail::button', ['url' => "https://forms.gle/We8hiEmopUF4LdTHA"])
SURVEY
@endcomponent

We went through the photos from the Event and sorted them out. Here you can find a pack of photos prepared for your company:

@component('mail::button', ['url' => $photosUrl ])
PHOTOS
@endcomponent

The upcoming edition of the Expo is planned for February 23, 2023. 

Thanks and best regards,

{{$footer}}

@endcomponent
