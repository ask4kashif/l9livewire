<x-mail::message>
# New Message

You received a message from

## Message from

__Name:__{{$data['name']}}<br>
__Email:__{{$data['email']}}<br>

## Message Body
{!! $data['body'] !!}
{{-- <x-mail::button :url="''">
Button Text
</x-mail::button> --}}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
