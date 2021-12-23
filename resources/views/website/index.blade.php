<x-guest-layout>
	<x-website-slogan />

	<section class="pt-0 pb-0 md:pt-20 md:pb-20 wow animate__fadeInUp">
		<div class="w-10/12 mx-auto">

			<div class="justify-end flex-1 mt-8 w-full md:w-auto block md:hidden mb-10">
			    <x-request-button />
			</div>

			<x-overlay-image src="{{ asset('/img/crystal-kwok-XUEdfpPIhXg-unsplash.jpg') }}" />

		</div>
	</section>

	<section class="pt-10 pb-7 md:pt-20 md:pb-20">
		<div class="w-11/12 md:w-10/12 mx-auto flex flex-col md:flex-row space-y-10 md:space-y-0 items-center space-x-0 md:space-x-32">
			<div class="w-full md:w-1/2">
				<h1 class="font-bold text-2xl md:text-5xl text-secondary mb-4 md:mb-10">
					Acerca de nosotros
				</h1>
				<p class="text-base md:text-2xl text-white mb-5">
					Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet ea explicabo ratione repellendus nostrum veritatis officia vero maiores dolorum, tempora aspernatur autem ipsum labore sunt sit consequatur obcaecati necessitatibus exercitationem.
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
		<div class="w-11/12 md:w-10/12 mx-auto flex flex-col md:flex-row space-y-10 md:space-y-0 items-center space-x-0 md:space-x-32">
			<div class="w-full md:w-1/2 hidden md:block">
				<x-overlay-image src="{{ asset('/img/SAN_QUINTIN_PICKUP.JPG') }}" />	
			</div>
			<div class="w-full md:w-1/2">
				<h1 class="font-bold text-2xl md:text-5xl text-secondary mb-4 md:mb-10">
					¡Trabajemos juntos!
				</h1>
				<p class="text-base md:text-2xl text-white md:mb-5">
					Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet ea explicabo ratione repellendus nostrum veritatis officia vero maiores dolorum, tempora aspernatur autem ipsum labore sunt sit consequatur obcaecati necessitatibus exercitationem.
				</p>
				<a href="{{ route('services') }}" 
					class="text-secondary underline mt-5 inline-block">
					Ver nuestros servicios
				</a>
			</div>
			<div class="w-full md:w-1/2 block md:hidden">
				<x-overlay-image src="{{ asset('/img/SAN_QUINTIN_PICKUP.JPG') }}" />	
			</div>
		</div>
	</section>

</x-guest-layout>