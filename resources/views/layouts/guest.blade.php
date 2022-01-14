<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="San Quintín, empresa ubicada en Tijuana Baja California enfocada en dar soluciones de control de plagas, desinfección de áreas, recubrimientos y limpieza especializada.">
        <meta name="keywords" content="Mantenimiento Industrial, Mantenimiento, Industrial, Fumigación, Control de plagas, Impermeabilización, Recubrimientos, Techos, Pisos, Epoxicos, Pisos Epoxicos, Limpieza, Desinfección, Sanitización, Saneamiento, Tijuana, Baja California, Servicios de mantenimiento, Virus, Cucarachas, Roedores, Bacterias, Microorganismos, San Quintín, San, Quintín">
        <meta name="author" content="San Quintín | Mantenimiento Industrial" />
        <title>{{ $pagetitle }}</title>

        <link rel="icon" href="{{ asset('img/favicon.png') }}">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="https://kit.fontawesome.com/133291f590.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased bg-primary">
            <x-website-header />
            <div class="hidden md:block">
                <x-social-media-icons />
            </div>
            {{ $slot }}
            <x-website-footer />
        </div>
    </body>
    <script>
        @isset($scripts){{ $scripts }}@endisset
    </script>
</html>
