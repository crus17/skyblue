{{-- blade-formatter-disable --}}
@component('mail::message')
# ¡Hurra, {{$user->name}}!

Estamos realmente emocionados de darte la bienvenida a la comunidad de {{$settings->site_name}}. <br>
Este es solo el comienzo de cosas aún más grandiosas por venir. <br> <br>
Así es como puedes aprovechar al máximo nuestro sistema. <br> <br>
<strong>Realiza un depósito, compra un plan de inversión y siéntate a disfrutar mientras hacemos que tu dinero trabaje para ti.</strong>
<br> <br>
Esperamos verte alcanzar tus deseos financieros.
<br> <br>
Tu experiencia va a ser agradable y sin problemas. 🙂 <br>
Sin frustraciones, sin problemas.
<br> <br>

Gracias y bienvenido. <br>
{{ config('app.name') }}
@endcomponent
{{-- blade-formatter-disable --}}
