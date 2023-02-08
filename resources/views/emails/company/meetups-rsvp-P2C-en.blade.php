@component('mail::message')
 
Hello,

You have received **meeting requests** from the E-commerce Berlin Expo participants via your [Exhibitor Profile]({!!$profileUrl!!}). **They are awaiting your answer. **

**Note: Accepting the meeting request will reveal contact information to the participant.** 

@component('mail::button', ['url' => $url("meetups")  ])
Sign up to check meeting requests
@endcomponent

**Please respond to these requests to avoid further reminders.**


@component('mail::panel')

**To receive more meeting requests** and increase visibility, promote your [public Exhibitor Profile]({!!$profileUrl!!}). Check ready-to-use [promotional materials]({!!$accountUrlPromotePublic!!}) to help you do this.

@endcomponent

Best regards,

{{$footer}}

@endcomponent

