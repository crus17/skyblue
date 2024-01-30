{{-- blade-formatter-disable --}}
@component('mail::message')
# Hola {{ $demo->receiver_name }},

Esto es para informarte que tu plan de inversión (plan {{ $demo->receiver_plan }}) ha expirado y tu capital para este plan se ha agregado a tu cuenta para retiro.
<br>

<strong>Plan:</strong> {{ $demo->receiver_plan }} <br>

<strong>Monto:</strong> {{ $demo->received_amount }} <br>

<strong>Fecha:</strong> {{ $demo->date }} <br>

Saludos cordiales,<br>
{{ $demo->sender }}.
@endcomponent
{{-- blade-formatter-disable --}}
