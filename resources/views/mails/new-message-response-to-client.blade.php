@component('mail::message')
# Gracias por escribirnos

¡Hola {{ $request->first_name }} {{ $request->last_name }}, recibimos tu mensaje! <br>
Te agradecemos el comunicarte con nosotros, te responderemos en la brevedad posible para aclarar tus dudas o bien para saludarte.

Que tengas excelente día.<br>
{{ config('app.name') }}
@endcomponent
