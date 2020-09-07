@component('mail::message')

# {{ $activity->name }} has started!

Hello {{ $user->name }},

This email was sent from the MESH II Proof-of-concept "Alerts" platform.

It was sent in response to the activity with the name **{{ $activity->name }}** being marked as "started".

Emails like this can be sent in response to updates being made on the platform, and can include custom information:

@component('mail::panel')
Activity Name: <b>{{ $activity->name }}</b><br/>
Activity Created At: <b>{{ $activity->created_at }}</b>
@endcomponent

It can also include links based on the triggering activity:

@component('mail::button', ['url' => 'https://mesh-alerts.stats4sdtest.online/admin/activity/'.$activity->id, 'color' => 'success'])
View Activity on the Platform
@endcomponent

If you are receiving this email without knowledge of where it came from, please contact support@stats4sd.org.

@endcomponent
