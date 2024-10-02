<nav class="fixed top-0 w-full bg-gray-100 bg-opacity-40 z-50 shadow-xl">
	<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
		<div class="flex h-20 items-center justify-between">
			<!-- Logo on the left -->
			<div class="flex items-center">
				<div class="flex-shrink-0">
					<img class="h-14 w-14" src="{{ asset('img/dinkes.png') }}" alt="Logo Dinas Kesehatan">
				</div>
				<div class="ml-4">
					<h3 class="text-red-600 text-lg font-extrabold">DINAS KESEHATAN</h3>
					<h3 class="text-red-600 text-lg font-extrabold">PROVINSI JAWA TENGAH</h3>
				</div>
			</div>

			<!-- Desktop Navigation items -->
			<div class="hidden md:block">
				<div class="ml-10 flex items-baseline space-x-4">
					<x-frontend.navbar.link href="/" :active="request()->is('/')">HOME</x-frontend.navbar.link>
					<x-frontend.navbar.link href="{{ route('persyaratan') }}" :active="request()->is('persyaratan')">
						PERSYARATAN</x-frontend.navbar.link>


					<!-- Dropdown Bidang -->
					<x-frontend.navbar.dropdown-link :active="request()->is('bidang')">
					</x-frontend.navbar.dropdown-link>
					@guest
					<x-frontend.navbar.link href="{{ route('login') }}">LOGIN</x-frontend.navbar.link>
					@else
					<!-- If logged in, show dashboard or other links -->
					<form action="{{ route('logout') }}" method="POST">
						@csrf
						@method('POST')
						<button type="submit">
							<x-frontend.navbar.link>LOGOUT</x-frontend.navbar.link>
						</button>
					</form>
					@endguest
				</div>
			</div>

			<!-- Mobile menu button -->
			<div class="md:hidden">
				<button id="mobile-menu-button"
					class="bg-red-700 p-2 rounded-md text-gray-400 hover:bg-red-600 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-red-700">
					<svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
						<path stroke-linecap="round" stroke-linejoin="round"
							d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
					</svg>
				</button>
			</div>
		</div>
	</div>

	<!-- Mobile menu -->
	<div class="md:hidden">
		<div id="mobile-menu" class="hidden px-2 pt-2 pb-3 space-y-1 sm:px-3">
			<x-frontend.navbar.link href="/"
				class="text-red-600 hover:bg-red-600 hover:text-white block rounded-md px-3 py-2 text-base font-medium">
				Dashboard</x-frontend.navbar.link>
			<x-frontend.navbar.link href="{{ route('persyaratan') }}"
				class="text-red-600 hover:bg-red-600 hover:text-white block rounded-md px-3 py-2 text-base font-medium">
				Persyaratan</x-frontend.navbar.link>

			<!-- Mobile Bidang Dropdown -->
			<div class="relative">
				<button id="bidang-dropdown-button"
					class="w-full inline-flex justify-between items-center text-red-600 hover:bg-red-600 hover:text-white rounded-md px-3 py-2 text-base font-medium">
					Bidang
					<svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
						<path fill-rule="evenodd"
							d="M5.23 7.21a.75.75 0 011.06.02L10 10.44l3.71-3.21a.75.75 0 111.02 1.1l-4 3.5a.75.75 0 01-1.04 0l-4-3.5a.75.75 0 01.02-1.06z"
							clip-rule="evenodd" />
					</svg>
				</button>

				<div id="bidang-dropdown" class="hidden space-y-1 px-2 py-3">
					<a href="{{ route('sekertariat') }}"
						class="block px-4 py-2 text-red-600 hover:bg-red-800 hover:text-white rounded-md">Sekertariat</a>
					<a href="{{ route('kesmas') }}"
						class="block px-4 py-2 text-red-600 hover:bg-red-800 hover:text-white rounded-md">Kesehatan
						Masyarakat</a>
					<a href="{{ route('pelkes') }}"
						class="block px-4 py-2 text-red-600 hover:bg-red-800 hover:text-white rounded-md">Pelayanan
						Kesehatan</a>
					<a href="{{ route('pencegahan_pengendalian_penyakit') }}"
						class="block px-4 py-2 text-red-600 hover:bg-red-800 hover:text-white rounded-md">Pencegahan
						dan Pengendalian Penyakit</a>
					<a href="{{ route('sumber_daya_kesehatan') }}"
						class="block px-4 py-2 text-red-600 hover:bg-red-800 hover:text-white rounded-md">Sumber Daya
						Kesehatan</a>
				</div>
			</div>
		</div>
	</div>
</nav>

<!-- Tambahkan padding di atas konten agar tidak tertutup oleh navbar -->
<div class="pt-20">
	<main>
		<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
			{{ $slot }}
		</div>
	</main>
</div>

<style>
	@media (min-width: 768px) {
		#mobile-menu {
			display: none !important;
		}
	}
</style>

<script>
	document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const bidangDropdownButton = document.getElementById('bidang-dropdown-button');
        const bidangDropdown = document.getElementById('bidang-dropdown');

        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });

        bidangDropdownButton.addEventListener('click', function() {
            bidangDropdown.classList.toggle('hidden');
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            if (!mobileMenu.contains(event.target) && !mobileMenuButton.contains(event.target)) {
                mobileMenu.classList.add('hidden');
            }
        });

        // Handle window resize
        window.addEventListener('resize', function() {
            if (window.innerWidth >= 768) {
                mobileMenu.classList.add('hidden');
                bidangDropdown.classList.add('hidden');
            }
        });
    });
</script>