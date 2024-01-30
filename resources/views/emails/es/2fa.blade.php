{{-- blade-formatter-disable --}}
@component('mail::message')
# Código 2FA.
Se ha realizado una solicitud de código temporal 2FA utilizando tu cuenta. <br>
Por favor, autentica utilizando los siguientes detalles:<br>
Código 2FA: <strong>{!! $demo->message !!}</strong> <br>

Gracias,<br>
{{ $demo->sender }}.
@endcomponent
{{-- blade-formatter-disable --}}
