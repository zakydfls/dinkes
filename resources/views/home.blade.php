<x-frontend.app-layout title="home">
	<x-notification />
	<x-slot name="heading">
		@auth()
		Welcome back, {{ auth()->user()->name }}
		@else
		Please login to continue
		@endauth
	</x-slot>
	<section class="bg-cover bg-center h-screen">
		<div class="flex items-center justify-center min-h-screen bg-gray-900 bg-opacity-50 rounded-lg">
			<div class="text-center text-white">
				<h1 class="text-5xl font-extrabold">Selamat Datang di Dinas Kesehatan</h1>
				<p class="mt-5 text-xl font-semibold">Provinsi Jawa Tengah</p>
				<x-frontend.button as="a" href="{{ route('applicants.create') }}" class="mt-6">Daftar Magang
				</x-frontend.button>
			</div>
		</div>
	</section>
	<section class="py-12 mt-40 bg-gray-100">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<h2 class="text-3xl font-bold text-center text-gray-600 mb-6">Gallery</h2>
			<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
				<div class="bg-white rounded-lg shadow-md overflow-hidden">
					<img class="w-full h-56 object-cover" src="{{ asset('img/dinkes3.jpg') }}" alt="Gallery 1">
					<div class="p-4">
						<h3 class="text-lg font-semibold">Gallery 1</h3>
					</div>
				</div>
				<div class="bg-white rounded-lg shadow-md overflow-hidden">
					<img class="w-full h-56 object-cover" src="{{ asset('img/dinkes4.jpg') }}" alt="Gallery 2">
					<div class="p-4">
						<h3 class="text-lg font-semibold">Gallery 2</h3>
					</div>
				</div>
				<div class="bg-white rounded-lg shadow-md overflow-hidden">
					<img class="w-full h-56 object-cover" src="{{ asset('img/dinkes5.jpg') }}" alt="Gallery 3">
					<div class="p-4">
						<h3 class="text-lg font-semibold">Gallery 3</h3>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="mt-40 py-12">
		<div class="max-w-7xl mx-auto py-12">
			<h2 class="text-center text-2xl font-bold mb-6">FAQs</h2>

			<div class="space-y-4">
				<div class="border rounded-md bg-gray-400 bg-opacity-50">
					<button class="font-semibold faq-toggle w-full text-left p-4 flex justify-between items-center">
						<span>Apa itu Dinas Kesehatan?</span>
						<span class="toggle-symbol">+</span>
					</button>
					<div class="faq-content hidden p-4">
						<p>Dinas Kesehatan adalah instansi pemerintah yang bertugas mengurus kesehatan masyarakat di
							wilayah Jawa Tengah.</p>
					</div>
				</div>

				<div class="border rounded-md bg-gray-400 bg-opacity-50">
					<button class="font-semibold faq-toggle w-full text-left p-4 flex justify-between items-center">
						<span>Bagaimana cara menghubungi Dinas Kesehatan?</span>
						<span class="toggle-symbol">+</span>
					</button>
					<div class="faq-content hidden p-4">
						<p>Anda dapat menghubungi kami melalui kontak yang tertera pada halaman <a href="#"
								class="text-blue-500 hover:underline">Kontak</a>.</p>
					</div>
				</div>

				<div class="border rounded-md bg-gray-400 bg-opacity-50">
					<button class="font-semibold faq-toggle w-full text-left p-4 flex justify-between items-center">
						<span>Bagaimana cara menggunakan layanan kami?</span>
						<span class="toggle-symbol">+</span>
					</button>
					<div class="faq-content hidden p-4">
						<p>Anda dapat menggunakan layanan kami dengan mendaftar melalui halaman layanan.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script>
		// FAQ accordion functionality
		document.querySelectorAll('.faq-toggle').forEach(button => {
			button.addEventListener('click', () => {
				const content = button.nextElementSibling;
				const toggleSymbol = button.querySelector('.toggle-symbol');
				
				if (content.classList.contains('hidden')) {
					content.classList.remove('hidden');
					toggleSymbol.textContent = '-';
				} else {
					content.classList.add('hidden');
					toggleSymbol.textContent = '+';
				}
			});
		});
	</script>
</x-frontend.app-layout>