<x-frontend.app-layout title="Profil Bidang Pencegahan dan Pengendalian Penyakit">
    {{-- Main content area --}}
    <div class="text-center pb-8">
        <h1 class="text-3xl font-bold text-red-700">PROFIL</h1>
    </div>
    <div class="bg-gray-900 flex justify-center bg-opacity-50 min-h-screen rounded-xl">
        {{-- Header section --}}
        <div>

            {{-- Rounded content box with shadow --}}
            <div class="flex justify-center">
                <div class="w-full max-w-3xl bg-white shadow-lg rounded-lg p-8 m-10">
                    <div class="text-left mb-6">
                        <h3
                            class="text-2xl font-bold text-center bg-gradient-to-r from-red-300 to-red-700 bg-clip-text text-transparent">
                            BIDANG PENCEGAHAN DAN PENGENDALIAN PENYAKIT
                        </h3>

                        {{-- Seksi Surveilans dan Imunisasi --}}
                        <div class="mt-4">
                            <h4 class="text-xl font-semibold text-red-700">a. Seksi Surveilans dan Imunisasi</h4>
                            <ul class="list-disc list-inside space-y-2 text-gray-700 mt-2">
                                <li>Identifikasi Wilayah Risiko Krisi Kesehatan</li>
                                <li>Pengelolaan Program Surveilans dan Imunisasi</li>
                            </ul>
                        </div>

                        {{-- Seksi Pencegahan dan Pengendalian Penyakit Menular --}}
                        <div class="mt-6">
                            <h4 class="text-xl font-semibold text-red-700">b. Seksi Pencegahan dan Pengendalian Penyakit
                                Menular</h4>
                            <ul class="list-disc list-inside space-y-2 text-gray-700 mt-2">
                                <li>Pengelolaan Upaya Pencegahan dan Pengendalian Penyakit Menular</li>
                            </ul>
                        </div>

                        {{-- Seksi Pencegahan dan Pengendalian Penyakit Tidak Menular dan Kesehatan Jiwa --}}
                        <div class="mt-6">
                            <h4 class="text-xl font-semibold text-red-700">c. Seksi Pencegahan dan Pengendalian Penyakit
                                Tidak Menular dan Kesehatan Jiwa</h4>
                            <ul class="list-disc list-inside space-y-2 text-gray-700 mt-2">
                                <li>Pengelolaan Upaya Pencegahan dan Pengendalian Penyakit Tidak Menular</li>
                                <li>Pengendalian Masalah Kesehatan Jiwa dan NAPZA</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-frontend.app-layout>