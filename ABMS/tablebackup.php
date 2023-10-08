<!-- Overlay element -->
<div id="overlay" class="fixed hidden z-40 w-screen h-screen inset-0 bg-gray-900 bg-opacity-60"></div>

<!-- The dialog -->
<div id="dialog"  class="hidden fixed z-50 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-screen max-w-md bg-white rounded-md px-8 py-6 space-y-5 drop-shadow-lg overflow-y-auto">
    <h1 class="text-2xl font-semibold">Add Data</h1>

    <!-- Input forms for names, address, and contact numbers -->
    <form class="w-full max-w-lg">
<div class="flex flex-wrap -mx-3 mb-6">
<div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
    First Name
  </label>
  <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Jane">
  <p class="text-red-500 text-xs italic">Please fill out this field.</p>
</div>
<div class="w-full md:w-1/2 px-3">
  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
    Last Name
  </label>
  <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe">
</div>
</div>
<div class="flex flex-wrap -mx-3 mb-6">
<div class="w-full px-3">
  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
    Password
  </label>
  <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="password" placeholder="******************">
  <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p>
</div>
</div>
<div class="flex flex-wrap -mx-3 mb-2">
<div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
    City
  </label>
  <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Albuquerque">
</div>
<div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
    State
  </label>
  <div class="relative">
    <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
      <option>New Mexico</option>
      <option>Missouri</option>
      <option>Texas</option>
    </select>
    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
      <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
    </div>
  </div>
</div>
<div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
    Zip
  </label>
  <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" placeholder="90210">
</div>
</div>
</form>

    <div class="flex justify-between">
    <button id="submit" class="px-5 py-2 bg-indigo-500 hover:bg-indigo-700 text-white cursor-pointer rounded-md">
        Submit</button>
    <!-- This button is used to close the dialog -->
    <button id="close" class="px-5 py-2 bg-indigo hover:bg-indigo-200 text-black cursor-pointer rounded-md">
        Close</button>
</div>

<!-- Javascript code -->
<script>
    var openButton = document.getElementById('open');
    var dialog = document.getElementById('dialog');
    var closeButton = document.getElementById('close');
    var overlay = document.getElementById('overlay');

    // show the overlay and the dialog
    openButton.addEventListener('click', function () {
        dialog.classList.remove('hidden');
        overlay.classList.remove('hidden');
    });

    // hide the overlay and the dialog
    closeButton.addEventListener('click', function () {
        dialog.classList.add('hidden');
        overlay.classList.add('hidden');
    });
</script>