@component('mail::message')
# Nuevo Mensaje

Se ha recibido un nuevo mensaje: <br>
<b>Nombre:</b> {{ $request->first_name }} {{ $request->last_name }} <br>
<b>Email:</b> {{ $request->email }} <br>
<b>Mensaje:</b> {{ $request->message }}

{{ config('app.name') }}
@endcomponent
