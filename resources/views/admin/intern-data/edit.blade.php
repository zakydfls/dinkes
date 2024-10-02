<x-admin-layout>
    <x-slot name="header">
        <h1 class="text-2xl font-bold">Edit data</h1>
    </x-slot>

    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
        <form action="{{ route('intern.data.update', $intern) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="revision_notes" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Revision
                    Notes</label>
                <input type="text" id="revision_notes" name="revision_notes"
                    value="{{ old('revision_notes', $intern->revision_notes) }}"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                    required>
                @error('revision_notes')
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

    <!-- Tambahkan JavaScript di bawah -->
    <script>
        document.getElementById('status').addEventListener('change', function() {
            var status = this.value;
            var revisionNotesInput = document.getElementById('revision_notes');

            // Jika status adalah 'approved', kosongkan revision_notes
            if (status === 'approved') {
                revisionNotesInput.value = '';
                revisionNotesInput.setAttribute('readonly', true); // Opsional: Mengunci input jika diinginkan
            } else {
                revisionNotesInput.removeAttribute('readonly'); // Membuka kembali jika status bukan 'approved'
            }
        });
    </script>
</x-admin-layout>