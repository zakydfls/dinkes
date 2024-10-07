<x-admin-layout>
    <x-slot name="header">
        <h1 class="text-2xl font-bold">Edit data</h1>
    </x-slot>

    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
        <form action="{{ route('intern.data.update', $intern) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="isi_link" class="block text-sm font-medium text-gray-200">Isi Link</label>
                <select id="isi_link" name="isi_link"
                    class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="1" {{ old('isi_link', $intern->isi_link) == '1' ? 'selected' : ''
                        }}>Sudah
                    </option>
                    <option value="0" {{ old('isi_link', $intern->isi_link) == '0' ? 'selected' : ''
                        }}>Belum</option>
                </select>

                @error('status')
                <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="status" class="block text-sm font-medium text-gray-200">Edit Status</label>
                <select id="status" name="status"
                    class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="pending" {{ old('status', $intern->status) == 'pending' ? 'selected' : '' }}>Pending
                    </option>
                    <option value="approved" {{ old('status', $intern->status) == 'approved' ? 'selected' : ''
                        }}>Approved</option>
                    <option value="rejected" {{ old('status', $intern->status) == 'rejected' ? 'selected' : ''
                        }}>Rejected</option>
                </select>

                @error('status')
                <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex items-center justify-between">
                <a href="{{ route('admin.users.index') }}"
                    class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">
                    Back to datas List
                </a>
                <button type="submit"
                    class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-white text-xs uppercase tracking-widest shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Update data
                </button>
            </div>
        </form>
    </div>

</x-admin-layout>