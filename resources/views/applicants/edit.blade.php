<x-admin-layout>
    <x-slot name="header">
        <h1 class="text-2xl font-bold">Edit data</h1>
    </x-slot>

    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
        <form action="{{ route('applicants.update', $applicant) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="status" class="block text-sm font-medium text-gray-200">Edit Status</label>
                <select id="status" name="status"
                    class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="pending" {{ old('status')=='pending' ? 'selected' : '' }}>Pending</option>
                    <option value="approved" {{ old('status')=='approved' ? 'selected' : '' }}>Approved</option>
                    <option value="dialihkan jadwal" {{ old('status')=='dialihkan jadwal' ? 'selected' : '' }}>Dialihkan
                        Jadwal</option>
                    <option value="ditolak" {{ old('status')=='ditolak' ? 'selected' : '' }}>Ditolak</option>
                </select>

                @error('status')
                <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>


            <div class="mb-4">
                {{-- <label class="block text-sm font-medium text-gray-700 dark:text-gray-200">Roles</label>
                @foreach($roles as $role)
                <div class="flex items-center mb-2">
                    <input type="checkbox" id="role_{{ $role->id }}" name="roles[]" value="{{ $role->id }}" {{
                        in_array($role->id, old('roles', $applicant->roles->pluck('id')->toArray())) ? 'checked' : '' }}
                    class="mr-2">
                    <label for="role_{{ $role->id }}" class="text-sm text-gray-900 dark:text-gray-100">{{ $role->name
                        }}</label>
                </div>
                @endforeach
                @error('roles')
                <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror --}}
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