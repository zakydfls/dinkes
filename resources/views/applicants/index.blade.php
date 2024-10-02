<x-frontend.app-layout title="user">
    <div class="flex justify-center">
        <div class="w-full bg-white bg-opacity-50 shadow-lg rounded-lg p-8 m-10">
            <h1 class="text-center font-bold text-red-700 text-xl">DATA PELAMAR</h1>
            <div class="mt-8 flow-root">
                <x-table>
                    <x-table.thead>
                        <tr>
                            <x-table.th>Id</x-table.th>
                            <x-table.th>Name</x-table.th>
                            <x-table.th>Email</x-table.th>
                            <x-table.th>No. Hp</x-table.th>
                            <x-table.th>NIM</x-table.th>
                            <x-table.th>Instansi</x-table.th>
                            <x-table.th>Tanggal Masuk</x-table.th>
                            <x-table.th>Tanggal Keluar</x-table.th>
                            <x-table.th>CV</x-table.th>
                            <x-table.th>Created At</x-table.th>
                            <x-table.th>Updated At</x-table.th>
                            <x-table.th>Action</x-table.th>
                        </tr>
                    </x-table.thead>
                    <x-table.tbody>
                        @foreach($datas as $index => $data)
                        <tr>
                            <x-table.td>{{ $index + 1 }}</x-table.td>
                            <x-table.td>{{ $data->name }}</x-table.td>
                            <x-table.td>{{ $data->email }}</x-table.td>
                            <x-table.td>{{ $data->no_hp }}</x-table.td>
                            <x-table.td>{{ $data->nim }}</x-table.td>
                            <x-table.td>{{ $data->asal_instansi }}</x-table.td>
                            <x-table.td>{{ $data->tgl_masuk }}</x-table.td>
                            <x-table.td>{{ $data->tgl_keluar }}</x-table.td>
                            <x-table.td>
                                <a class="hover:underline text-blue-500" href="{{ Storage::url($data->filename) }}"
                                    download>
                                    Download CV
                                </a>
                            </x-table.td>
                            <x-table.td>{{ $data->created_at->format('d M Y') }}</x-table.td>
                            <x-table.td>{{ $data->updated_at->format('d M Y') }}</x-table.td>
                            <x-table.td>
                                <div class="flex justify-end gap-x-2">
                                    <a class="hover:underline" href="/user/{{ $data->id }}">
                                        View
                                    </a>
                                    <a class="hover:underline" href="/user/{{ $data->id }}/edit">
                                        Edit
                                    </a>
                                    <a class="hover:underline" href="/applicant/{{ $data->id }}/delete">
                                        Delete
                                    </a>
                                </div>
                            </x-table.td>
                        </tr>
                        @endforeach
                    </x-table.tbody>
                </x-table>
            </div>
        </div>
    </div>
</x-frontend.app-layout>