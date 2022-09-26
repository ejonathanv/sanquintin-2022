<x-guest-layout>
	<x-website-slogan />
	<section class="pt-0 pb-0 md:pt-20 md:pb-20 wow animate__fadeInUp">
		<div class="w-10/12 mx-auto">
			<div class="justify-end flex-1 mt-8 w-full md:w-auto block md:hidden mb-10">
			    <x-request-button />
			</div>
			<x-overlay-image src="{{ asset('/img/Limpieza_Industrial (6).JPG') }}" alt="San Quintín | Mantenimiento Industrial" />
		</div>
	</section>
	<section class="pt-10 pb-7 md:pt-20 md:pb-20">
		<div class="w-10/12 md:w-10/12 mx-auto flex flex-col md:flex-row space-y-10 md:space-y-0 items-center space-x-0 md:space-x-32">
			<div class="w-full md:w-1/2">
				<h1 class="font-bold text-2xl md:text-5xl text-secondary mb-4 md:mb-10">
					Acerca de nosotros
				</h1>
				<p class="text-base md:text-2xl text-white mb-5">
					Cuando se trata de mantenimiento industrial no hay nada que se nos resista. Contamos con una amplia experiencia en el sector y nos hemos especializado en el mantenimiento de plantas industriales, centros de distribución, almacenes, oficinas, restaurantes, hoteles, escuelas, hospitales, etc.
				</p>
				<a href="{{ route('about') }}" 
					class="text-secondary underline">
					Continuar leyendo
				</a>
			</div>
			<div class="w-full md:w-1/2">
				<x-overlay-image src="{{ asset('/img/SAN_QUINTIN_CONDUCIENDO.JPG') }}" />
			</div>
		</div>
	</section>
	<section class="pt-0 pb-10 md:pt-20 md:pb-20">
		<div class="w-10/12 md:w-10/12 mx-auto flex flex-col md:flex-row space-y-10 md:space-y-0 items-center space-x-0 md:space-x-32">
			<div class="w-full md:w-1/2 hidden md:block">
				<x-overlay-image src="{{ asset('/img/SAN_QUINTIN_PICKUP.JPG') }}" />	
			</div>
			<div class="w-full md:w-1/2">
				<h1 class="font-bold text-2xl md:text-5xl text-secondary mb-4 md:mb-10">
					¡Recibe una cotización hoy mismo!
				</h1>
				<p class="text-base md:text-2xl text-white mb-5">
					¿Necesitas un servicio de mantenimiento industrial? ¡No esperes más! Contáctanos y recibe una cotización personalizada para tu empresa.
				</p>
				<a href="{{ route('contact') }}" 
					class="bg-secondary text-center text-white py-3 px-7 shadow-md rounded-sm underline block md:inline-block">
					Contactar
				</a>
			</div>
			<div class="w-full md:w-1/2 block md:hidden">
				<x-overlay-image src="{{ asset('/img/SAN_QUINTIN_PICKUP.JPG') }}" />	
			</div>
		</div>
	</section>
</x-guest-layout>