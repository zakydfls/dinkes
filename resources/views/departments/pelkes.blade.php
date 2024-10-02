<x-frontend.app-layout title="Profil Bidang Pelayanan Kesehatan">
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
                            BIDANG PELAYANAN KESEHATAN
                        </h3>

                        {{-- Seksi Pelayanan Kesehatan Primer dan Kesehatan Tradisional --}}
                        <div class="mt-4">
                            <h4 class="text-xl font-semibold text-red-700">a. Seksi Pelayanan Kesehatan Primer dan
                                Kesehatan Tradisional</h4>
                            <ul class="list-disc list-inside space-y-2 text-gray-700 mt-2">
                                <li>Pengelolaan Pelayanan Kesehatan Tradisional, Akupuntur, Asuhan Mandiri dan
                                    Tradisional Lainnya</li>
                                <li>Transformasi Layanan Primer</li>
                            </ul>
                        </div>

                        {{-- Seksi Standarisasi Pelayanan dan Jaminan Kesehatan --}}
                        <div class="mt-6">
                            <h4 class="text-xl font-semibold text-red-700">b. Seksi Standarisasi Pelayanan dan Jaminan
                                Kesehatan</h4>
                            <ul class="list-disc list-inside space-y-2 text-gray-700 mt-2">
                                <li>Transformasi Sistem Pembiayaan Kesehatan</li>
                                <li>Standarisasi mutu pelayanan</li>
                            </ul>
                        </div>

                        {{-- Seksi Pelayanan Kesehatan Rujukan --}}
                        <div class="mt-6">
                            <h4 class="text-xl font-semibold text-red-700">c. Seksi Pelayanan Kesehatan Rujukan</h4>
                            <ul class="list-disc list-inside space-y-2 text-gray-700 mt-2">
                                <li>Penguatan Transformasi Layanan Kesehatan</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-frontend.app-layout>