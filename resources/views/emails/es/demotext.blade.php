{{-- blade-formatter-disable --}}
@component('mail::message')

# ¡Bienvenido a {{ $demo->sender }}!
¡Tu registro se ha completado con éxito y estamos realmente emocionados de darte la bienvenida a la comunidad de {{ $demo->sender }}!
<br>

<p style="font-size:12px">Tu contraseña generada por el sistema: <strong>{{ $demo->password }}</strong></p><br>
<p style="font-size:12px">Por favor, asegúrate de cambiar esta contraseña por una de tu elección.</p><br>
Si necesitas ayuda, no dudes en contactarnos en <br> {{ $demo->contact_email }} <br><br>

Saludos cordiales,<br>
{{ $demo->sender }}.
@endcomponent
{{-- blade-formatter-disable --}}

