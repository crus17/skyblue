{{-- blade-formatter-disable --}}
@component('mail::message')
# Hola {{ $user->name }},

Esta es una notificación de un nuevo retorno de inversión (ROI) en tu cuenta de inversión.
<br>

<strong>Plan:</strong> {{ $plan }} <br>
<strong>Monto:</strong> {{ $settings->currency }}{{ $amount }}<br>
<strong>Fecha:</strong> {{ $plandate }} <br>

Gracias,<br>
{{ $settings->site_name }}.
@endcomponent
{{-- blade-formatter-disable --}}
