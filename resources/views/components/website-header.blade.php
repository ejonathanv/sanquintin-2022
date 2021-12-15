<header class="py-7 md:py-20">
    <div class="w-11/12 mx-auto flex flex-col md:flex-row items-start md:items-center justify-start md:justify-between">
        <div class="flex-1">
            <a href="{{ route('home') }}">
                <img src="{{ asset('img/LOGO_SAN_QUINTIN_FONDO_AZUL.png') }}" class="h-10 md:h-12 w-auto" alt="">
            </a>
        </div>
        <nav class="flex-1 w-full flex items-center justify-between md:justify-center space-x-0 md:space-x-10 text-white text-base lg:text-lg mt-7 md:mt-0">
            <a href="{{ route('home') }}" class="hover:underline hidden md:inline-block hover:text-secondary @if(request()->routeIs('home')) underline text-secondary @endif">
                Inicio
            </a>
            <a href="{{ route('about') }}" class="hover:underline hover:text-secondary @if(request()->routeIs('about')) underline text-secondary @endif">
                Nosotros
            </a>
            <a href="{{ route('services') }}" class="hover:underline hover:text-secondary @if(request()->routeIs('services')) underline text-secondary @endif">
                Servicios
            </a>
            <a href="{{ route('contact') }}" class="hover:underline hover:text-secondary @if(request()->routeIs('contact')) underline text-secondary @endif">
                Contacto
            </a>
        </nav>
        <div class="justify-end flex-1 mt-16 md:mt-0 w-full md:w-auto hidden md:flex">
            <x-request-button />
        </div>
    </div>
</header>