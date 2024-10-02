@props(['active' => false])

<div class="relative inline-block text-left">
    <a id="dropdownButton" :active="request()->is('bidang')"
        class="{{ $active ? 'bg-red-700 text-white font-extrabold text-lg ' : 'text-lg font-extrabold text-red-700 hover:bg-red-400 hover:text-white rounded-md px-3 py-2 text-sm font-medium '}}rounded-md px-3 py-2 text-sm font-medium cursor-pointer">
        BIDANG
        <svg class="ml-2 w-5 h-5 inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
                d="M5.292 7.293a1 1 0 011.416 0L10 10.586l3.292-3.293a1 1 0 111.416 1.416l-4 4a1 1 0 01-1.416 0l-4-4a1 1 0 010-1.416z"
                clip-rule="evenodd" />
        </svg>
    </a>

    <!-- Dropdown menu -->
    <div id="dropdownMenu"
        class="hidden absolute left-0 z-10 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
        <div class="py-1 flex flex-col">
            <x-frontend.navbar.link href="{{ route('sekertariat') }}" :active="request()->is('bidang/sekertariat')">
                Sekertariat
            </x-frontend.navbar.link>
            <x-frontend.navbar.link href="{{ route('pelkes') }}" :active="request()->is('bidang/pelkes')">Pelayanan
                Kesehatan
            </x-frontend.navbar.link>
            <x-frontend.navbar.link href="{{ route('kesmas') }}" :active="request()->is('bidang/kesmas')">Kesehatan
                Masyarakat
            </x-frontend.navbar.link>
            <x-frontend.navbar.link href="{{ route('pencegahan_pengendalian_penyakit') }}"
                :active="request()->is('bidang/pencegahan-pengendalian-penyakit')">Pencegahan Pengendalian Penyakit
            </x-frontend.navbar.link>
            <x-frontend.navbar.link href="{{ route('sumber_daya_kesehatan') }}"
                :active="request()->is('bidang/sumber-daya-kesehatan')">Sumber Daya Kesehatan</x-frontend.navbar.link>
        </div>
    </div>
</div>

<script>
    const dropdownButton = document.getElementById('dropdownButton');
    const dropdownMenu = document.getElementById('dropdownMenu');

    dropdownButton.addEventListener('click', () => {
        dropdownMenu.classList.toggle('hidden');
    });

    // Close dropdown when clicking outside
    window.addEventListener('click', (event) => {
        if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
            dropdownMenu.classList.add('hidden');
        }
    });
</script>