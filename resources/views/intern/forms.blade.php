<div class="mt-8">
    <div class="mt-4">
        <div class="p-6 bg-white rounded-md shadow-md">
            <form action="{{ route('intern.report.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <label for="file" class="block text-sm font-semibold text-gray-700">Upload</label>
                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-dashed border-gray-300 rounded-md">
                    <div class="space-y-1 text-center">
                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                            viewBox="0 0 48 48" aria-hidden="true">
                            <path d="M28 8a4 4 0 00-8 0v12H8a4 4 0 000 8h12v12a4 4 0 008 0V28h12a4 4 0 000-8H28V8z">
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
                <div class="flex justify-center pt-3">
                    <button type="submit"
                        class="disabled:bg-gray-400 w-full md:w-1/4 bg-blue-900 text-white font-bold py-3 rounded-md shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
                        @if($userHasReport) disabled @endif>
                        Submit
                    </button>
                </div>
                @if($userHasReport)
                <p class="text-red-600 text-sm mt-2">You have already submitted an internship report.</p>
                @endif
            </form>
        </div>
    </div>
</div>
<script>
    function updateFileName(input) {
        var fileName = input.files[0].name;
        document.getElementById('file-name').textContent = fileName;
    }
</script>