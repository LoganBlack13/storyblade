@aware([
'components'
])
<aside
  id="default-sidebar"
  class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
  aria-label="Sidenav"
>
  <div class="overflow-y-auto py-5 px-3 h-full bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    <div class="font-bold text-xl flex justify-center items-center p-2 mb-4 text-gray-900 dark:text-white">
      <img
        class="w-16"
        src="{{ Vite::asset('resources/images/storyblade-logo.png') }}" alt="storyblade-logo"
      >
      <span>
       StoryBlade
      </span>
    </div>
    <h1 class="font-bold text-gray-900 dark:text-white">{{ __('Components') }}</h1>
    <ul class="space-y-2">
      @foreach($components as $name => $component)
        @php
          $label = $component['label'];
          $icon = $component['icon'];
        @endphp
        <x-sidebar.link
          :url="route('storyblade') . '?component=' . $name"
          :label="$label"
        >
          <x-slot:icon>
            <svg
              aria-hidden="true"
              class="w-6 h-6 text-gray-400 transition duration-75 dark:text-gray-400 group-hover:text-gray-900
      dark:group-hover:text-white"
              fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
            >
              {!! $icon !!}
            </svg>
          </x-slot:icon>
        </x-sidebar.link>
      @endforeach
    </ul>
    <ul class="pt-5 mt-5 space-y-2 border-t border-gray-200 dark:border-gray-700">
      <li>
        <a
          href="#"
          class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group"
        >
          <svg
            aria-hidden="true"
            class="flex-shrink-0 w-6 h-6 text-gray-400 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
          >
            <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
            <path
              fill-rule="evenodd"
              d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
              clip-rule="evenodd"
            ></path>
          </svg>
          <span class="ml-3">Docs</span>
        </a>
      </li>
      <li>
        <a
          href="#"
          class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group"
        >
          <svg
            aria-hidden="true"
            class="flex-shrink-0 w-6 h-6 text-gray-400 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
          >
            <path
              fill-rule="evenodd"
              d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z"
              clip-rule="evenodd"
            ></path>
          </svg>
          <span class="ml-3">Help</span>
        </a>
      </li>
    </ul>
  </div>
</aside>

