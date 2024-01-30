{{-- blade-formatter-disable --}}
@component('mail::message')
# Hola {{$foramin  ? 'Admin' : $user->name}}
@if ($foramin)
Esto es para informarte de un depósito exitoso de {{$settings->currency.$deposit->amount}} de {{$user->name}}. {{ $deposit->status == "Processed" ? '' : ' Por favor, inicia sesión para procesarlo.' }}
@else
@if ($deposit->status == 'Processed')
Esto es para informarte que tu depósito de {{$settings->currency.$deposit->amount}} ha sido recibido y confirmado. El saldo de tu cuenta se ha acreditado con la cantidad especificada.
@else
Esto es para informarte que tu depósito de {{$settings->currency.$deposit->amount}} ha sido exitoso. Por favor, espera mientras confirmamos tu depósito. Recibirás una notificación sobre el estado de esta transacción.
@endif
@endif
Gracias,
<br>
{{ config('app.name') }}
@endcomponent
{{-- blade-formatter-disable --}}
