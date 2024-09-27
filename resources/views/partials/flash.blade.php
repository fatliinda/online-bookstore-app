@if (session('success'))
    <div id="flash-message" class="fixed bottom-4 right-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg shadow-lg z-50" role="alert">
        <strong class="font-bold">Success!</strong>
        <span class="block sm:inline">{{ session('success') }}</span>
        <button onclick="closeFlash()" class="absolute top-0 right-0 mt-1 mr-1 text-green-700 hover:text-green-900">
            &times;
        </button>
    </div>
@endif

@if (session('error'))
    <div id="flash-message" class="fixed bottom-4 right-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg shadow-lg z-50" role="alert">
        <strong class="font-bold">Error!</strong>
        <span class="block sm:inline">{{ session('error') }}</span>
        <button onclick="closeFlash()" class="absolute top-0 right-0 mt-1 mr-1 text-red-700 hover:text-red-900">
            &times;
        </button>
    </div>
@endif
<script>
  // Function to close the flash message
  function closeFlash() {
      const flashMessage = document.getElementById('flash-message');
      if (flashMessage) {
          flashMessage.style.display = 'none';
      }
  }

  // Auto-hide the flash message after 5 seconds
  setTimeout(() => {
      closeFlash();
  }, 5000);  // Adjust the time (in milliseconds) if needed
</script>
