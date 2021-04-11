@component('mail::message')
# {{ config('app.name') }} Inquiry Details

<ul class="list-disc">
    <li>Name: {{$name}}</li>
    <li>Email: {{$email}}</li>
    <li>Message: {{$message}}</li>
</ul>

@endcomponent