<x-frontend.app-layout title="Profil Bidang Sumber Daya Kesehatan">
    {{-- Main content area --}}
    <div class="text-center pb-8">
        <h1 class="text-3xl font-bold text-red-700">PROFIL</h1>
    </div>
    <div class="bg-gray-900 flex items-center justify-center bg-opacity-50 min-h-screen rounded-xl">
        {{-- Header section --}}
        <div class="w-full max-w-3xl bg-white shadow-lg rounded-lg p-8 m-10">
            <div class="text-left mb-6">
                <h3
                    class="text-2xl font-bold text-center bg-gradient-to-r from-red-300 to-red-700 bg-clip-text text-transparent">
                    BIDANG SUMBER DAYA KESEHATAN
                </h3>

                {{-- Seksi Manajemen Informasi Kesehatan --}}
                <div class="mt-4">
                    <h4 class="text-xl font-semibold text-red-700">a. Seksi Manajemen Informasi Kesehatan</h4>
                    <ul class="list-disc list-inside space-y-2 text-gray-700 mt-2">
                        <li>Pengelolaan Data dan Informasi Kesehatan</li>
                        <li>Pengembangan Sistem Informasi Kesehatan</li>
                        <li>Pengelolaan Kajian Kesehatan</li>
                    </ul>
                </div>

                {{-- Seksi Sumber Daya Manusia Kesehatan --}}
                <div class="mt-6">
                    <h4 class="text-xl font-semibold text-red-700">b. Seksi Sumber Daya Manusia Kesehatan</h4>
                    <ul class="list-disc list-inside space-y-2 text-gray-700 mt-2">
                        <li>Perencanaan SDM Kesehatan Jawa Tengah</li>
                        <li>Pembinaan dan Pengawasan SDM Kesehatan</li>
                        <li>Pengembangan SDM Kesehatan</li>
                    </ul>
                </div>

                {{-- Seksi Farmasi, Makanan Minuman dan Perbekalan Kesehatan --}}
                <div class="mt-6">
                    <h4 class="text-xl font-semibold text-red-700">c. Seksi Farmasi, Makanan Minuman dan Perbekalan
                        Kesehatan</h4>
                    <ul class="list-disc list-inside space-y-2 text-gray-700 mt-2">
                        <li>Pelaksanaan Program Kefarmasian </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-frontend.app-layout>