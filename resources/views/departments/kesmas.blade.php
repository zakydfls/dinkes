<x-frontend.app-layout title="Profil Bidang Kesehatan Masyarakat">
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
                            BIDANG KESEHATAN MASYARAKAT
                        </h3>

                        {{-- Seksi Kesehatan Keluarga dan Gizi --}}
                        <div class="mt-4">
                            <h4 class="text-xl font-semibold text-red-700">a. Seksi Kesehatan Keluarga dan Gizi</h4>
                            <ul class="list-disc list-inside space-y-2 text-gray-700 mt-2">
                                <li>Kesehatan Ibu dan Anak </li>
                                <li>Kesehatan Usia Produktif (Remaja, Kespro dan Disabilitas)</li>
                                <li>Kesehatan Usia Lanjut</li>
                                <li>Kesehatan Gizi Masyarakat (stunting)</li>
                            </ul>
                        </div>

                        {{-- Seksi Promosi Kesehatan dan Pemberdayaan Masyarakat --}}
                        <div class="mt-6">
                            <h4 class="text-xl font-semibold text-red-700">b. Seksi Promosi Kesehatan dan Pemberdayaan
                                Masyarakat</h4>
                            <ul class="list-disc list-inside space-y-2 text-gray-700 mt-2">
                                <li>Promosi Kesehatan: Penyuluhan melalui berbagai media (pembuatan media edukasi cetak
                                    dan elektronik seperti iklan, dialog interaktif, dan pameran)</li>
                                <li>Pemberdayaan Masyarakat</li>
                            </ul>
                        </div>

                        {{-- Seksi Kesehatan Lingkungan, Kesehatan Kerja dan Olahraga --}}
                        <div class="mt-6">
                            <h4 class="text-xl font-semibold text-red-700">c. Seksi Kesehatan Lingkungan, Kesehatan
                                Kerja dan Olahraga</h4>
                            <ul class="list-disc list-inside space-y-2 text-gray-700 mt-2">
                                <li>Kesehatan Kerja dan Olah Raga</li>
                                <li>Kesehatan Lingkungan </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-frontend.app-layout>