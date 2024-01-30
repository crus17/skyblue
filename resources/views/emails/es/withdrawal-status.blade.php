{{-- blade-formatter-disable --}}
@component('mail::message')
# Hola {{$foramin  ? 'Admin' : $user->name}}
@if ($foramin)
Esto es para informarte que {{$user->name}} ha realizado una solicitud de retiro de {{$settings->currency.$withdrawal->amount}}. Por favor, inicia sesión en tu cuenta para revisar y tomar las acciones necesarias.
@else
@if ($withdrawal->status == 'Processed')
Esto es para informarte que tu solicitud de retiro de {{$settings->currency.$withdrawal->amount}} ha sido aprobada y los fondos han sido enviados a tu cuenta seleccionada.
@else
Esto es para informarte que tu solicitud de retiro de {{$settings->currency.$withdrawal->amount}} se ha realizado con éxito. Por favor, espera mientras procesamos tu solicitud. Recibirás una notificación sobre el estado de tu solicitud.
@endif
@endif
Gracias,<br>
{{ config('app.name') }}
@endcomponent
{{-- blade-formatter-disable --}}
