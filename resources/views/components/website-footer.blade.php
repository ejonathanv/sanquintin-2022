<footer class="bg-gray-900 py-7 md:py-32 text-white">
    <div class="w-10/12 mx-auto flex flex-col md:flex-row space-y-10 md:space-y-0 items-start">
        <div class="w-full md:w-3/12">
            <a href="#">
                <img src="{{ asset('img/LOGO_SAN_QUINTIN_FONDO_AZUL.png') }}" class="h-12 w-auto" alt="San Quintín | Mantenimiento Industrial">
            </a>
        </div>
        <div class="w-full md:w-4/12 flex flex-col md:flex-row items-cecnter space-x-0 md:space-x-10">
            <nav class="text-white flex flex-col space-y-0 md:space-y-3 flex-1">
                <a class="hover:text-secondary underline" href="{{ route('home') }}">Inicio</a>
                <a class="hover:text-secondary underline" href="{{ route('about') }}">Nosotros</a>
                <a class="hover:text-secondary underline" href="{{ route('services') }}">Servicios</a>
                <a class="hover:text-secondary underline" href="{{ route('contact') }}">Contacto</a>
            </nav>

            <nav class="text-white flex-1 flex flex-col space-y-0 md:space-y-3">
                <a class="hover:text-secondary underline" href="{{ route('privacy-policies') }}">
                    Política de privacidad
                </a>
            </nav>
        </div>
        <div class="flex md:hidden items-center space-x-4">
            <span>Síguenos en: </span>
            <a href="https://www.facebook.com/sanquintinindustrial" target="_blank" class="text-secondary hover:text-white">
                <i class="fab fa-facebook"></i>
            </a>
            <a href="https://www.instagram.com/sanquintinindustrial" target="_blank" class="text-secondary hover:text-white">
                <i class="fab fa-instagram"></i>
            </a>
        </div>
        <div class="w-full md:w-5/12 text-left md:text-right">
            <p>{{ date('Y') }} - {{ env('APP_NAME') }}</p>
        </div>
    </div>
</footer>