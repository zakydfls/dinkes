<x-admin-layout>
    <x-notification />
    <div class="flex flex-col mt-8">
        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <h1 class="text-3xl py-5 font-bold">Status Laporan</h1>
            <div
                class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th
                                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                File</th>
                            <th
                                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Status</th>
                            <th
                                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Revision Notes</th>
                            <th
                                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Created At</th>
                            <th
                                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Action</th>
                        </tr>
                    </thead>

                    <tbody class="bg-white">
                        @foreach($interns as $intern)
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="flex items-center">
                                    <div class="ml-1">
                                        <div class="text-sm leading-5 text-gray-900"> <a
                                                class="hover:underline text-blue-500"
                                                href="{{ Storage::url($intern->filename) }}">
                                                Download
                                            </a></div>
                                    </div>
                                </div>
            </div>
            </td>
            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                @if ($intern->status == 'pending')
                <span
                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-700 text-white">Pending</span>
                @elseif ($intern->status == 'approved')
                <span
                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-700 text-white">Approved</span>
                @elseif ($intern->status == 'rejected')
                <span
                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-700 text-white">Rejected</span>
                @endif
            </td>
            <td class="text-start px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                <div class="text-sm leading-5 font-medium text-gray-900">{{ $intern->revision_notes??'-'
                    }}
                </div>
            </td>
            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                <div class="text-sm leading-5 text-gray-900">Diupload : {{
                    \Carbon\Carbon::parse($intern->created_at)->format('d-m-Y') }}</div>
            </td>
            <td class="items-start px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 font-medium">
                <form action="{{ route('intern.report.destroy', $intern->id) }}" method="POST"
                    onsubmit="return confirm('Are you sure you want to delete this report?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded">Delete</button>
                </form>
            </td>

            </tr>
            @endforeach
            </tbody>
            </table>
        </div>
    </div>
    </div>
</x-admin-layout>