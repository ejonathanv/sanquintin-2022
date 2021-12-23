<x-guest-layout>

	<section class="pt-7 md:pt-20 pb-10 md:pb-32">
		<div class="w-10/12 md:w-9/12 mx-auto flex flex-col md:flex-row items-start space-x-0 md:space-x-32 space-y-10 md:space-y-0">
			<div class="w-full md:w-1/3">
				<h3 class="text-3xl text-white mb-7 wow animate__fadeInUp">Tijuana B.C.</h3>
				<p class="text-white text-base md:text-lg">Calle Jimenez 7871 Independencia.</p>
				<p class="text-white text-base md:text-lg mb-7">Comunícate con nosotros al: <br> <span class="text-secondary">(664) 386-4368</span></p>

				<a href="mailto:info@sanquintinmx.com" class="text-white underline text-2xl">info@sanquintinmx.com</a>
			</div>
			<div class="w-full md:w-2/3">

				@if (session('success'))
				    <h3 class="text-secondary text-2xl wow animate__fadeInUp">{{ session('success') }}</h3>
				@else
					<form action="{{ route('send-message') }}" method="post">
						@csrf
						<div class="flex flex-col md:flex-row items-center space-x-0 md:space-x-10 mb-7">
							<div class="w-full md:w-1/2">
								<label for="" class="text-white block">Nombre(s)<span class="text-secondary">*</span></label>
								<input type="text" 
									class="form-input focus:outline-none focus:border-secondary focus:ring-1 focus:ring-secondary" 
									name="first_name" 
									required 
									autofocus
									value="{{ old('first_name') }}"
									placeholder="Tu nombre">
								@error('first_name')
									<p class="text-sm text-secondary">{{$message}}</p>
								@enderror
							</div>

							<div class="w-full md:w-1/2 mt-7 md:mt-0">
								<label for="" class="text-white block">Apellido(s)<span class="text-secondary">*</span></label>
								<input type="text" 
									class="form-input focus:outline-none focus:border-secondary focus:ring-1 focus:ring-secondary" 
									name="last_name" 
									required
									value="{{ old('last_name') }}"
									placeholder="Tu apellido">
								@error('last_name')
									<p class="text-sm text-secondary">{{$message}}</p>
								@enderror
							</div>
						</div>

						<div class="mb-7">
							<label for="" class="text-white block">Correo electrónico<span class="text-secondary">*</span></label>
							<input type="email" 
								class="form-input focus:outline-none focus:border-secondary focus:ring-1 focus:ring-secondary" 
								name="email" 
								required
								value="{{ old('email') }}"
								placeholder="usuario@empresa.com">
							@error('email')
								<p class="text-sm text-secondary">{{$message}}</p>
							@enderror
						</div>

						<div class="mb-7">
							<label for="" class="text-white block">Mensaje<span class="text-secondary">*</span></label>
							<textarea name="message" 
								rows="3" 
								class="form-input focus:outline-none focus:border-secondary focus:ring-1 focus:ring-secondary" 
								placeholder="Escribe aquí tu mensaje..." 
								required>{{ old('message') }}</textarea>
							@error('message')
								<p class="text-sm text-secondary">{{$message}}</p>
							@enderror
						</div>

						<div class="mb-7">
							<div class="flex flex-col md:flex-row items-start md:items-end space-y-2 md:space-y-0 space-x-0 md:space-x-2 mb-2">
								<div class="flex items-center space-x-2">
									<span id="captcha-image">{!! captcha_img() !!}</span>
									<button type="button" style="height: 52px;" class="btn py-3 ring-0 px-7 border-2 border-secondary text-secondary" class="refresh-captcha" id="refresh-captcha" onclick="refreshCaptcha()">
									    <i class="fa fa-sync-alt fa-sm"></i>
									</button>
								</div>
								<input id="captcha" type="text" class="flex-1 form-input focus:outline-none focus:border-secondary focus:ring-1 focus:ring-secondary" style="height: 52px" placeholder="Ingresa los 4 caractéres de la imagen" name="captcha" required>
							</div>
							@error('captcha')
								<p class="text-sm text-secondary">{{$message}}</p>
							@enderror
						</div>

						<button class="py-3 px-7 bg-secondary text-white text-lg shadow-md">
							<i class="fa fa-paper-plane fa-sm mr-2"></i>
							Enviar
						</button>

					</form>
				@endif
			</div>
		</div>
	</section>

	<x-slot name="scripts">
	    function refreshCaptcha(){
	    	fetch('{{ route('refresh-captcha') }}').then(function (response) {
	    		return response.json();
	    	}).then(function (data) {
	    		document.getElementById("captcha-image").innerHTML = data.captcha;
	    	}).catch(function (err) {
	    		console.warn('Algo salió mal.', err);
	    	});
	    }
	</x-slot>
</x-guest-layout>