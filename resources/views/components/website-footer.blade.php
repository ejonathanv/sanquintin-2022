<footer class="bg-white py-7 md:py-32 bg-indigo-100">
    <div class="w-11/12 mx-auto flex flex-col md:flex-row space-y-10 md:space-y-0 items-start">
        <div class="w-full md:w-3/12">
            <a href="#">
                <img src="{{ asset('img/LOGO_SAN_QUINTIN_ORIGINAL.png') }}" class="h-12 w-auto" alt="">
            </a>
        </div>
        <div class="w-full md:w-4/12 flex flex-col md:flex-row items-cecnter space-x-0 md:space-x-10">
            <nav class="text-primary flex flex-col space-y-0 md:space-y-3 flex-1">
                <a class="hover:text-secondary underline" href="#">Inicio</a>
                <a class="hover:text-secondary underline" href="#">Nosotros</a>
                <a class="hover:text-secondary underline" href="#">Servicios</a>
                <a class="hover:text-secondary underline" href="#">Contacto</a>
            </nav>

            <nav class="text-primary flex-1 flex flex-col space-y-0 md:space-y-3">
                <a class="hover:text-secondary underline" href="#">Términos y condiciones</a>
                <a class="hover:text-secondary underline" href="#">Políticas de privacidad</a>
            </nav>
        </div>
        <div class="w-full md:w-5/12 text-left md:text-right">
            <p>{{ date('Y') }}, {{ env('app_name') }}</p>
        </div>
    </div>
</footer>