@component('mail::message')
# Introduction


<strong>Name</strong>{{$data['name']}}

<strong>Email</strong>{{$data['email']}}

<strong>Message</strong>

{{$data['message']}}
@endcomponent
