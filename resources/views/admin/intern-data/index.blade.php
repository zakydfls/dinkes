<x-admin-layout>
    <x-notification />
    {{-- <h3 class="text-gray-700 text-3xl font-medium">Dashboard</h3>

    {{-- <div class="mt-4">
        <div class="flex flex-wrap -mx-6">
            <div class="w-full px-6 sm:w-1/2 xl:w-1/3">
                <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white">
                    <div class="p-3 rounded-full bg-indigo-600 bg-opacity-75">
                        <svg class="h-8 w-8 text-white" viewBox="0 0 28 30" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M18.2 9.08889C18.2 11.5373 16.3196 13.5222 14 13.5222C11.6804 13.5222 9.79999 11.5373 9.79999 9.08889C9.79999 6.64043 11.6804 4.65556 14 4.65556C16.3196 4.65556 18.2 6.64043 18.2 9.08889Z"
                                fill="currentColor" />
                            <path
                                d="M25.2 12.0444C25.2 13.6768 23.9464 15 22.4 15C20.8536 15 19.6 13.6768 19.6 12.0444C19.6 10.4121 20.8536 9.08889 22.4 9.08889C23.9464 9.08889 25.2 10.4121 25.2 12.0444Z"
                                fill="currentColor" />
                            <path
                                d="M19.6 22.3889C19.6 19.1243 17.0927 16.4778 14 16.4778C10.9072 16.4778 8.39999 19.1243 8.39999 22.3889V26.8222H19.6V22.3889Z"
                                fill="currentColor" />
                            <path
                                d="M8.39999 12.0444C8.39999 13.6768 7.14639 15 5.59999 15C4.05359 15 2.79999 13.6768 2.79999 12.0444C2.79999 10.4121 4.05359 9.08889 5.59999 9.08889C7.14639 9.08889 8.39999 10.4121 8.39999 12.0444Z"
                                fill="currentColor" />
                            <path
                                d="M22.4 26.8222V22.3889C22.4 20.8312 22.0195 19.3671 21.351 18.0949C21.6863 18.0039 22.0378 17.9556 22.4 17.9556C24.7197 17.9556 26.6 19.9404 26.6 22.3889V26.8222H22.4Z"
                                fill="currentColor" />
                            <path
                                d="M6.64896 18.0949C5.98058 19.3671 5.59999 20.8312 5.59999 22.3889V26.8222H1.39999V22.3889C1.39999 19.9404 3.2804 17.9556 5.59999 17.9556C5.96219 17.9556 6.31367 18.0039 6.64896 18.0949Z"
                                fill="currentColor" />
                        </svg>
                    </div>

                    <div class="mx-5">
                        <h4 class="text-2xl font-semibold text-gray-700">8,282</h4>
                        <div class="text-gray-500">New Users</div>
                    </div>
                </div>
            </div>

            <div class="w-full mt-6 px-6 sm:w-1/2 xl:w-1/3 sm:mt-0">
                <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white">
                    <div class="p-3 rounded-full bg-orange-600 bg-opacity-75">
                        <svg class="h-8 w-8 text-white" viewBox="0 0 28 28" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M4.19999 1.4C3.4268 1.4 2.79999 2.02681 2.79999 2.8C2.79999 3.57319 3.4268 4.2 4.19999 4.2H5.9069L6.33468 5.91114C6.33917 5.93092 6.34409 5.95055 6.34941 5.97001L8.24953 13.5705L6.99992 14.8201C5.23602 16.584 6.48528 19.6 8.97981 19.6H21C21.7731 19.6 22.4 18.9732 22.4 18.2C22.4 17.4268 21.7731 16.8 21 16.8H8.97983L10.3798 15.4H19.6C20.1303 15.4 20.615 15.1004 20.8521 14.6261L25.0521 6.22609C25.2691 5.79212 25.246 5.27673 24.991 4.86398C24.7357 4.45123 24.2852 4.2 23.8 4.2H8.79308L8.35818 2.46044C8.20238 1.83722 7.64241 1.4 6.99999 1.4H4.19999Z"
                                fill="currentColor" />
                            <path
                                d="M22.4 23.1C22.4 24.2598 21.4598 25.2 20.3 25.2C19.1403 25.2 18.2 24.2598 18.2 23.1C18.2 21.9402 19.1403 21 20.3 21C21.4598 21 22.4 21.9402 22.4 23.1Z"
                                fill="currentColor" />
                            <path
                                d="M9.1 25.2C10.2598 25.2 11.2 24.2598 11.2 23.1C11.2 21.9402 10.2598 21 9.1 21C7.9402 21 7 21.9402 7 23.1C7 24.2598 7.9402 25.2 9.1 25.2Z"
                                fill="currentColor" />
                        </svg>
                    </div>

                    <div class="mx-5">
                        <h4 class="text-2xl font-semibold text-gray-700">200,521</h4>
                        <div class="text-gray-500">Total Orders</div>
                    </div>
                </div>
            </div>

            <div class="w-full mt-6 px-6 sm:w-1/2 xl:w-1/3 xl:mt-0">
                <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white">
                    <div class="p-3 rounded-full bg-pink-600 bg-opacity-75">
                        <svg class="h-8 w-8 text-white" viewBox="0 0 28 28" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.99998 11.2H21L22.4 23.8H5.59998L6.99998 11.2Z" fill="currentColor"
                                stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                            <path
                                d="M9.79999 8.4C9.79999 6.08041 11.6804 4.2 14 4.2C16.3196 4.2 18.2 6.08041 18.2 8.4V12.6C18.2 14.9197 16.3196 16.8 14 16.8C11.6804 16.8 9.79999 14.9197 9.79999 12.6V8.4Z"
                                stroke="currentColor" stroke-width="2" />
                        </svg>
                    </div>

                    <div class="mx-5">
                        <h4 class="text-2xl font-semibold text-gray-700">215,542</h4>
                        <div class="text-gray-500">Available Products</div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="mt-8">

    </div>

    <div class="flex flex-col mt-8">
        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div
                class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th
                                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-center text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Name </th>
                            <th
                                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-center text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                NIM</th>
                            <th
                                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-center text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Instansi</th>
                            <th
                                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-center text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Created/Updated At</th>

                            <th
                                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-center text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Laporan</th>
                            <th
                                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-center text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Bukti Survey</th>
                            <th
                                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-center text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Isi Link</th>
                            <th
                                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-center text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Status</th>
                            <th
                                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-center text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Action</th>
                        </tr>
                    </thead>

                    <tbody class="bg-white">
                        @foreach($interns as $intern)
                        <tr>
                            <td class="text-center px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img src="{{ asset('icons/profile.png') }}" alt="">
                                    </div>

                                    <div class="ml-4">
                                        <div class="text-sm leading-5 font-medium text-gray-900">{{ $intern->user->name
                                            }}
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm leading-5 font-medium text-gray-900">{{ $intern->user->no_id? : ""
                                    }}
                                </div>
                            </td>

                            <td class="text-center px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm leading-5 text-gray-900">{{ $intern->user->instansi }}</div>
                            </td>
                            <td class="text-center px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm leading-5 text-gray-900">Masuk : {{
                                    \Carbon\Carbon::parse($intern->created_at)->format('d-m-Y') }}</div>
                                <div class="text-sm leading-5 text-gray-900">Keluar : {{
                                    \Carbon\Carbon::parse($intern->updated_at)->format('d-m-Y') }}</div>
                            </td>
                            <td class="text-center px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm leading-5 text-gray-900"> <a class="hover:underline text-blue-500"
                                        href="{{ Storage::url($intern->filename) }}">
                                        Download
                                    </a></div>
                            </td>
                            <td class="text-center px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm leading-5 text-gray-900"> <a class="hover:underline text-blue-500"
                                        href="{{ Storage::url($intern->file_bukti) }}" download>
                                        Download
                                    </a></div>
                            </td>
                            <td class="text-center px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                @if ($intern->isi_link)
                                <svg class="text-center w-6 h-6 text-green-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                @else
                                <svg class="w-6 h-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                                @endif
                            </td>
                            <td class="text-center px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                @if ($intern->status == 'pending')
                                <span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-900 text-white">Pending</span>
                                @elseif ($intern->status == 'approved')
                                <span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-700 text-white">Approved</span>
                                @else
                                <span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-600 text-white">Rejected</span>
                                @endif
                            </td>
                            <td
                                class="text-center px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 font-medium">
                                <div class="flex justify-center">
                                    <a href="{{ route('intern.data.edit', $intern) }}"
                                        class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                    <form action="{{ route('intern.data.destroy', $intern) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="pl-2 text-red-600 hover:text-red-900">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const notification = document.getElementById('notification');
            if (notification) {
                setTimeout(() => {
                    notification.classList.add('opacity-0');
                    setTimeout(() => notification.remove(), 500); // Menghapus elemen setelah animasi selesai
                }, 3000); // Tampil selama 3 detik
            }
        });
    </script>
</x-admin-layout>