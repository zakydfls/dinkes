<x-frontend.app-layout title="Formulir Magang">
    <div class="bg-gray-50 bg-opacity-80 rounded-xl min-h-screen py-8">
        {{-- Header section --}}
        <div class="text-center py-8">
            <h1 class="text-3xl font-bold text-red-600">FORMULIR MAGANG</h1>
        </div>

        {{-- Form section --}}
        <div class="flex justify-center">
            <form class="w-full max-w-3xl bg-white bg-opacity-90 shadow-md rounded-lg p-8 space-y-6"
                action="{{ route('applicants.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    {{-- Left-side inputs --}}
                    <div class="space-y-4">
                        <div>
                            <label for="name" class="block text-sm font-semibold text-gray-700">Nama</label>
                            <input type="text" id="name" name="name"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 py-3 text-lg"
                                placeholder="Enter Name" value="{{ old('name') }}">
                            @error('name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-semibold text-gray-700">Email</label>
                            <input type="email" id="email" name="email"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 py-3 text-lg"
                                placeholder="Enter Email" value="{{ old('email') }}">
                            @error('email')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="no_hp" class="block text-sm font-semibold text-gray-700">No. Handphone
                                WA</label>
                            <input type="tel" id="no_hp" name="no_hp"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 py-3 text-lg"
                                placeholder="Enter phone number" value="{{ old('no_hp') }}">
                            @error('no_hp')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="nim" class="block text-sm font-semibold text-gray-700">Nomor Induk
                                Mahasiswa/Siswa</label>
                            <input type="text" id="nim" name="nim"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 py-3 text-lg"
                                placeholder="Enter NIM" value="{{ old('nim') }}">
                            @error('nim')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="asal_instansi" class="block text-sm font-semibold text-gray-700">Asal
                                Instansi</label>
                            <input type="text" id="asal_instansi" name="asal_instansi"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 py-3 text-lg"
                                placeholder="Enter Instansi" value="{{ old('asal_instansi') }}">
                            @error('asal_instansi')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="add_student_2" class="block text-sm font-semibold text-gray-700">Tambah
                                Mahasiswa ke-2</label>
                            <select id="add_student_2" name="add_student_2"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 py-3 text-lg">
                                <option value="no">Tidak</option>
                                <option value="yes">Ya</option>
                            </select>
                        </div>

                        <div id="student_2_fields" style="display: none;">
                            <div>
                                <label for="name_2" class="block text-sm font-semibold text-gray-700">Nama Mahasiswa
                                    ke-2</label>
                                <input type="text" id="name_2" name="name_2"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 py-3 text-lg"
                                    placeholder="Enter Name" value="{{ old('name_2') }}">
                                @error('name_2')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="nim_2" class="block text-sm font-semibold text-gray-700">NIM Mahasiswa
                                    ke-2</label>
                                <input type="text" id="nim_2" name="nim_2"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 py-3 text-lg"
                                    placeholder="Enter NIM" value="{{ old('nim_2') }}">
                                @error('nim_2')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="add_student_3" class="block text-sm font-semibold text-gray-700">Tambah
                                Mahasiswa ke-3</label>
                            <select id="add_student_3" name="add_student_3"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 py-3 text-lg">
                                <option value="no">Tidak</option>
                                <option value="yes">Ya</option>
                            </select>
                        </div>

                        <div id="student_3_fields" style="display: none;">
                            <div>
                                <label for="name_3" class="block text-sm font-semibold text-gray-700">Nama Mahasiswa
                                    ke-3</label>
                                <input type="text" id="name_3" name="name_3"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 py-3 text-lg"
                                    placeholder="Enter Name" value="{{ old('name_3') }}">
                                @error('name_3')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="nim_3" class="block text-sm font-semibold text-gray-700">NIM Mahasiswa
                                    ke-3</label>
                                <input type="text" id="nim_3" name="nim_3"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 py-3 text-lg"
                                    placeholder="Enter NIM" value="{{ old('nim_3') }}">
                                @error('nim_3')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    {{-- Right-side inputs --}}
                    <div class="space-y-4">
                        <div>
                            <label for="tgl_masuk" class="block text-sm font-semibold text-gray-700">Tanggal
                                Masuk</label>
                            <input type="date" id="tgl_masuk" name="tgl_masuk"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 py-3 text-lg"
                                value="{{ old('tgl_masuk') }}">
                            @error('tgl_masuk')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="tgl_keluar" class="block text-sm font-semibold text-gray-700">Tanggal
                                Keluar</label>
                            <input type="date" id="tgl_keluar" name="tgl_keluar"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 py-3 text-lg"
                                value="{{ old('tgl_keluar') }}">
                            @error('tgl_keluar')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <div id="drop-area"
                                class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-dashed border-gray-300 rounded-md">
                                <div class="space-y-1 text-center">
                                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                                        viewBox="0 0 48 48" aria-hidden="true">
                                        <path
                                            d="M28 8a4 4 0 00-8 0v12H8a4 4 0 000 8h12v12a4 4 0 008 0V28h12a4 4 0 000-8H28V8z">
                                        </path>
                                    </svg>
                                    <div class="flex text-sm text-gray-600">
                                        <label for="file"
                                            class="relative cursor-pointer bg-white rounded-md font-medium text-purple-600 hover:text-purple-500">
                                            <span>Click to Upload</span>
                                            <input id="file" name="file" type="file" class="sr-only"
                                                onchange="updateFileName(this)">
                                        </label>
                                        <p class="pl-1">or drag and drop</p>
                                    </div>
                                    <p id="file-name" class="text-xs text-gray-500">Max. file size: 10 MB</p>
                                </div>
                            </div>
                            @error('file')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>
                </div>

                {{-- Submit Button --}}
                <div class="flex justify-center pt-3">
                    <button type="submit"
                        class="w-full md:w-1/4 bg-blue-600 text-white font-bold py-3 rounded-md shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Submit</button>
                </div>
            </form>
        </div>
    </div>

    {{-- JavaScript to update file name --}}
    <script>
        var dropArea = document.getElementById('drop-area');

// Prevent default drag behaviors
['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
    dropArea.addEventListener(eventName, preventDefaults, false);
});

function preventDefaults(e) {
    e.preventDefault();
    e.stopPropagation();
}

// Highlight the drop area on drag events
['dragenter', 'dragover'].forEach(eventName => {
    dropArea.addEventListener(eventName, highlight, false);
});
['dragleave', 'drop'].forEach(eventName => {
    dropArea.addEventListener(eventName, unhighlight, false);
});

function highlight() {
    dropArea.classList.add('border-blue-600');
}

function unhighlight() {
    dropArea.classList.remove('border-blue-600');
}

// Handle dropped files
dropArea.addEventListener('drop', handleDrop, false);

function handleDrop(e) {
    var dt = e.dataTransfer;
    var files = dt.files;
    handleFiles(files);
}

function handleFiles(files) {
    document.getElementById('file').files = files;
    updateFileName(document.getElementById('file'));
}

function updateFileName(input) {
    if (input.files.length > 0) {
        var fileName = input.files[0].name;
        document.getElementById('file-name').textContent = fileName;
    }
}
document.getElementById('add_student_2').addEventListener('change', function() {
          document.getElementById('student_2_fields').style.display = this.value === 'yes' ? 'block' : 'none';
      });

      document.getElementById('add_student_3').addEventListener('change', function() {
          document.getElementById('student_3_fields').style.display = this.value === 'yes' ? 'block' : 'none';
      });
    </script>
</x-frontend.app-layout>