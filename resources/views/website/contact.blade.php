<x-guest-layout>

	<section class="pt-7 md:pt-20 pb-10 md:pb-32">
		<div class="w-11/12 md:w-9/12 mx-auto flex flex-col md:flex-row items-start space-x-0 md:space-x-32 space-y-10 md:space-y-0">
			<div class="w-full md:w-1/3">
				<h3 class="text-3xl text-white mb-7 wow animate__fadeInUp">Tijuana B.C.</h3>
				<p class="text-white text-base md:text-lg">Calle Jimenez 7871 Independencia.</p>
				<p class="text-white text-base md:text-lg">Comunícate con nosotros al: <br> <span class="text-secondary">(664) 386-4368</span></p>
			</div>
			<div class="w-full md:w-2/3">
				<form action="">
					<div class="flex flex-col md:flex-row items-center space-x-0 md:space-x-10 mb-7">
						<div class="w-full md:w-1/2">
							<label for="" class="text-white block">Nombre(s)*</label>
							<input type="text" class="form-input focus:outline-none focus:border-secondary focus:ring-1 focus:ring-secondary" name="first_name" required autofocus placeholder="Tu nombre">
						</div>

						<div class="w-full md:w-1/2 mt-7 md:mt-0">
							<label for="" class="text-white block">Apellido(s)*</label>
							<input type="text" class="form-input focus:outline-none focus:border-secondary focus:ring-1 focus:ring-secondary" name="last_name" required placeholder="Tu apellido">
						</div>
					</div>

					<div class="mb-7">
						<label for="" class="text-white block">Correo electrónico*</label>
						<input type="email" class="form-input focus:outline-none focus:border-secondary focus:ring-1 focus:ring-secondary" name="email" required placeholder="usuario@empresa.com">
					</div>

					<div class="mb-7">
						<label for="" class="text-white block">Mensaje*</label>
						<textarea name="message" rows="3" class="form-input focus:outline-none focus:border-secondary focus:ring-1 focus:ring-secondary" placeholder="Escribe aquí tu mensaje..." required></textarea>
					</div>

					<button class="py-3 px-7 bg-secondary text-white text-lg shadow-md">Enviar</button>

				</form>
			</div>
		</div>
	</section>

</x-guest-layout>