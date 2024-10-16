@if(session('success') || session('error'))
<div id="notification-modal"
    class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 transition-opacity duration-300 ease-in-out opacity-0 invisible">
    <div
        class="bg-white rounded-lg shadow-xl p-8 w-96 max-w-md transform transition-transform duration-300 ease-in-out scale-95">
        <div class="text-center">
            @if(session('success'))
            <div class="mx-auto flex items-center justify-center h-16 w-16 rounded-full bg-green-100 mb-6">
                <svg class="h-10 w-10 text-green-600 animate-bounce" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
            </div>
            <h3 class="text-xl leading-6 font-medium text-green-600 mb-3">Berhasil!</h3>
            <h2>Harap menunggu verifikasi berkas dan email pengumuman, mohon untuk cek kotak masuk dan spam email secara
                berkala</h2>
            @else
            <div class="mx-auto flex items-center justify-center h-16 w-16 rounded-full bg-red-100 mb-6">
                <svg class="h-10 w-10 text-red-600 animate-pulse" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </div>
            <h3 class="text-xl leading-6 font-medium text-red-600 mb-3">Error!</h3>
            @endif
            <p class="text-base text-gray-500 mb-6">
                {{ session('success') ?? session('error') }}
            </p>
            <button id="close-modal"
                class="inline-flex justify-center rounded-md border border-transparent shadow-sm px-6 py-3 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-150 ease-in-out">
                OK
            </button>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
  const modal = document.getElementById('notification-modal');
  const closeButton = document.getElementById('close-modal');

  function showModal() {
    modal.classList.remove('invisible', 'opacity-0');
    modal.classList.add('opacity-100');
    modal.querySelector('div').classList.remove('scale-95');
    modal.querySelector('div').classList.add('scale-100');
  }

  function hideModal() {
    modal.classList.remove('opacity-100');
    modal.classList.add('opacity-0');
    modal.querySelector('div').classList.remove('scale-100');
    modal.querySelector('div').classList.add('scale-95');
    setTimeout(() => {
      modal.classList.add('invisible');
    }, 300);
  }

  showModal();

  closeButton.addEventListener('click', hideModal);
});
</script>
@endif