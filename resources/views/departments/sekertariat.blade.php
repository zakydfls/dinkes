<x-frontend.app-layout title="Profil Sekretariat">
    {{-- Main content area --}}
    <div class="text-center pb-8">
        <h1 class="text-3xl font-bold text-red-700">PROFIL</h1>
    </div>
    <div class="bg-gray-900 flex justify-center bg-opacity-50 rounded-xl">
        {{-- Header section --}}
        <div>

            {{-- Rounded content box with shadow --}}
            <div class="flex justify-center">
                <div class="w-full max-w-3xl bg-white shadow-lg rounded-lg p-8 m-10">
                    <div class="text-left mb-6">
                        <h3
                            class="text-2xl font-bold text-center bg-gradient-to-r from-red-300 to-red-700 bg-clip-text text-transparent">
                            SEKRETARIAT
                        </h3>


                        {{-- Sub Bagian Umum & Kepegawaian --}}
                        <div class="mt-4">
                            <h4 class="text-xl font-semibold text-red-700">a. Sub Bagian Umum & Kepegawaian</h4>
                            <ul class="list-disc list-inside space-y-2 text-gray-700 mt-2">
                                <li>Pengelolaan Ketatausahaan Dinas Kesehatan</li>
                                <li>Pengelolaan Kearsipan Dinas Kesehatan</li>
                                <li>Pengelolaan Kepegawaian Dinas Kesehatan</li>
                                <li>Pengelolaan Rumah Tangga Kantor Dinas Kesehatan</li>
                                <li>Pengelolaan Aset Barang Milik Daerah Dinas Kesehatan</li>
                                <li>Tugas Kehumasan (Liputan dan Content Creating)</li>
                            </ul>
                        </div>

                        {{-- Sub Bagian Program --}}
                        <div class="mt-6">
                            <h4 class="text-xl font-semibold text-red-700">b. Sub Bagian Program</h4>
                            <ul class="list-disc list-inside space-y-2 text-gray-700 mt-2">
                                <li>Perencanaan Program dan Kegiatan Dinas Kesehatan</li>
                                <li>Pengendalian Program dan Kegiatan Dinas Kesehatan</li>
                                <li>Evaluasi dan Pelaporan Program dan Kegiatan</li>
                            </ul>
                        </div>

                        {{-- Sub Bagian Keuangan --}}
                        <div class="mt-6">
                            <h4 class="text-xl font-semibold text-red-700">c. Sub Bagian Keuangan</h4>
                            <ul class="list-disc list-inside space-y-2 text-gray-700 mt-2">
                                <li>Pengelolaan Keuangan</li>
                                <li>Verifikasi dan Pembukuan</li>
                                <li>Pelaksanaan Akuntansi</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-frontend.app-layout>