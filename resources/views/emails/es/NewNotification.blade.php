{{-- blade-formatter-disable --}}
@component('mail::message')
# {{ $salutaion ? $salutaion : "Hola" }} {{ $recipient}},

@if ($attachment != null)
    <img src="{{ $message->embed(asset('storage/'. $attachment)) }}">
@endif
{!! $body !!}

Gracias,<br>
{{ config('app.name') }}
@endcomponent
{{-- blade-formatter-disable --}}
