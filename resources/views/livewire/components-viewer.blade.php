<div class="mt-8">
  <div class="border border-gray-200 rounded-lg rounded-b-none bg-gray-50 dark:border-gray-600 dark:bg-gray-700">
    <div class="flex justify-between w-full grid-cols-3 p-5 rounded-lg sm:grid">
      <div class="flex items-center space-x-3 text-lg font-bold  text-gray-500 dark:text-gray-400">
        {{ $componentGroupLabel }}
      </div>
      <div class="items-center hidden mx-auto space-x-3 lg:flex">
        <button
          class="flex items-center justify-center p-2 text-xs font-medium text-gray-700 bg-white w-9 h-9 border border-gray-200 rounded-lg toggle-dark-state-example hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-gray-300 dark:focus:ring-gray-500 dark:bg-gray-800 focus:outline-none dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
        >
          <svg
            class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20"
          >
            <path
              stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M10 14v4m-4 1h8M1 10h18M2 1h16a1 1 0 0 1 1 1v11a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1Z"
            ></path>
          </svg>
        </button>
        <button
          class="flex items-center justify-center p-2 text-xs font-medium text-gray-700 bg-white w-9 h-9 border border-gray-200 rounded-lg toggle-dark-state-example hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-gray-300 dark:focus:ring-gray-500 dark:bg-gray-800 focus:outline-none dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
        >
          <svg
            class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20"
          >
            <path
              stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M7.5 16.5h3M2 1h14a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1Z"
            ></path>
          </svg>
        </button>
        <button
          class="flex items-center justify-center p-2 text-xs font-medium text-gray-700 bg-white w-9 h-9 border border-gray-200 rounded-lg toggle-dark-state-example hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-gray-300 dark:focus:ring-gray-500 dark:bg-gray-800 focus:outline-none dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
        >
          <svg
            class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 20"
          >
            <path
              stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M1 14h12M1 4h12M6.5 16.5h1M2 1h10a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1Z"
            ></path>
          </svg>
        </button>
      </div>

      <div class="flex items-center col-span-2 ml-auto space-x-3 lg:col-span-1">
        <select
          id="font-family"
          class="hidden p-2 px-3 text-xs h-9 text-gray-900 bg-white border border-gray-300 rounded-lg cursor-pointer
          w-36 sm:block hover:bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800
          dark:border-gray-600 dark:placeholder:text-gray-400 dark:text-white dark:focus:ring-blue-500
          dark:focus:border-blue-500"
          wire:change="changeCurrentComponent($event.target.value)"
        >
          @foreach($items as $item)
            <option value="{{$item }}" @selected($item === $currentComponent)>{{ $item }}</option>
          @endforeach

        </select>
        <div
          class="relative"
          x-data="{ showColor: false}"
        >
          <button
            class="flex items-center justify-center p-2 text-xs h-9 font-medium text-gray-900 bg-white border
            border-gray-200 rounded-lg focus:outline-none hover:bg-gray-100 hover:text-blue-700 focus:z-10
            focus:ring-2 focus:ring-gray-300 dark:focus:ring-gray-500 dark:bg-gray-800 dark:text-gray-400
            dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
            x-on:click="showColor = !showColor"
          >
            <svg
              class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
              fill="none" viewBox="0 0 20 20"
            >
              <path
                stroke="currentColor" stroke-linecap="round" stroke-width="2"
                d="M4.5 19A3.5 3.5 0 0 1 1 15.5V2a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v13.5A3.5 3.5 0 0 1 4.5 19Zm0 0H18a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1h-4.938a1 1 0 0 0-.697.283l-4.238 4.124a1.046 1.046 0 0 0-.164.208C6.986 18.228 6.184 18.705 4.5 19Zm0-4h.01m8.925-12.293 3.536 3.536a1 1 0 0 1 0 1.414L8 16.627v-9.9l4.02-4.02a1 1 0 0 1 1.415 0Z"
              ></path>
            </svg>
            <span class="w-6 h-4 rounded ml-2 bg-pink-600 dark:bg-pink-400">
            </span>
            <span class="hidden">Change color</span>
          </button>
          <div
            x-show="showColor"
            x-cloak
            class="absolute z-50 p-3 text-base list-none -translate-x-1/2 bg-white rounded shadow top-10 -left-32 w-96 dark:bg-gray-700"
          >
            <p class="block mb-3 text-sm font-medium text-gray-900 dark:text-gray-300">Choose primary color:</p>
            <div class="grid grid-cols-3 gap-2">
              <button
                class="flex items-center p-2 text-gray-600 rounded dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-600"
              ><span class="inline-block w-6 h-4 rounded mr-2 bg-rose-600 dark:bg-rose-400"></span>rose
              </button>
              <button
                class="flex items-center p-2 text-gray-600 rounded dark:text-gray-400 bg-gray-100 dark:bg-gray-600"
              ><span class="inline-block w-6 h-4 rounded mr-2 bg-pink-600 dark:bg-pink-400"></span>pink
              </button>
              <button
                class="flex items-center p-2 text-gray-600 rounded dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-600"
              ><span class="inline-block w-6 h-4 rounded mr-2 bg-fuchsia-600 dark:bg-fuchsia-400"></span>fuchsia
              </button>
              <button
                class="flex items-center p-2 text-gray-600 rounded dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-600"
              ><span class="inline-block w-6 h-4 rounded mr-2 bg-purple-600 dark:bg-purple-400"></span>purple
              </button>
              <button
                class="flex items-center p-2 text-gray-600 rounded dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-600"
              ><span class="inline-block w-6 h-4 rounded mr-2 bg-violet-600 dark:bg-violet-400"></span>violet
              </button>
              <button
                class="flex items-center p-2 text-gray-600 rounded dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-600"
              ><span class="inline-block w-6 h-4 rounded mr-2 bg-indigo-600 dark:bg-indigo-400"></span>indigo
              </button>
              <button
                class="flex items-center p-2 text-gray-600 rounded dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-600"
              ><span class="inline-block w-6 h-4 rounded mr-2 bg-blue-600 dark:bg-blue-400"></span>blue
              </button>
              <button
                class="flex items-center p-2 text-gray-600 rounded dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-600"
              ><span class="inline-block w-6 h-4 rounded mr-2 bg-sky-600 dark:bg-sky-400"></span>sky
              </button>
              <button
                class="flex items-center p-2 text-gray-600 rounded dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-600"
              ><span class="inline-block w-6 h-4 rounded mr-2 bg-cyan-600 dark:bg-cyan-400"></span>cyan
              </button>
              <button
                class="flex items-center p-2 text-gray-600 rounded dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-600"
              ><span class="inline-block w-6 h-4 rounded mr-2 bg-teal-600 dark:bg-teal-400"></span>teal
              </button>
              <button
                class="flex items-center p-2 text-gray-600 rounded dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-600"
              ><span class="inline-block w-6 h-4 rounded mr-2 bg-emerald-600 dark:bg-emerald-400"></span>emerald
              </button>
              <button
                class="flex items-center p-2 text-gray-600 rounded dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-600"
              ><span class="inline-block w-6 h-4 rounded mr-2 bg-green-600 dark:bg-green-400"></span>green
              </button>
              <button
                class="flex items-center p-2 text-gray-600 rounded dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-600"
              ><span class="inline-block w-6 h-4 rounded mr-2 bg-lime-600 dark:bg-lime-400"></span>lime
              </button>
              <button
                class="flex items-center p-2 text-gray-600 rounded dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-600"
              ><span class="inline-block w-6 h-4 rounded mr-2 bg-yellow-600 dark:bg-yellow-400"></span>yellow
              </button>
              <button
                class="flex items-center p-2 text-gray-600 rounded dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-600"
              ><span class="inline-block w-6 h-4 rounded mr-2 bg-amber-600 dark:bg-amber-400"></span>amber
              </button>
              <button
                class="flex items-center p-2 text-gray-600 rounded dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-600"
              ><span class="inline-block w-6 h-4 rounded mr-2 bg-orange-600 dark:bg-orange-400"></span>orange
              </button>
              <button
                class="flex items-center p-2 text-gray-600 rounded dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-600"
              ><span class="inline-block w-6 h-4 rounded mr-2 bg-red-600 dark:bg-red-400"></span>red
              </button>
              <button
                class="flex items-center p-2 text-gray-600 rounded dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-600"
              ><span class="inline-block w-6 h-4 rounded mr-2 bg-stone-600 dark:bg-stone-400"></span>stone
              </button>
              <button
                class="flex items-center p-2 text-gray-600 rounded dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-600"
              ><span class="inline-block w-6 h-4 rounded mr-2 bg-neutral-600 dark:bg-neutral-400"></span>neutral
              </button>
              <button
                class="flex items-center p-2 text-gray-600 rounded dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-600"
              ><span class="inline-block w-6 h-4 rounded mr-2 bg-zinc-600 dark:bg-zinc-400"></span>zinc
              </button>
              <button
                class="flex items-center p-2 text-gray-600 rounded dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-600"
              ><span class="inline-block w-6 h-4 rounded mr-2 bg-gray-600 dark:bg-gray-400"></span>gray
              </button>
              <button
                class="flex items-center p-2 text-gray-600 rounded dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-600"
              ><span class="inline-block w-6 h-4 rounded mr-2 bg-slate-600 dark:bg-slate-400"></span>slate
              </button>
            </div>
          </div>
        </div>
        <button
          class="flex items-center justify-center p-2 text-xs w-9 h-9 font-medium text-gray-700 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-gray-300 dark:focus:ring-gray-500 dark:bg-gray-800 focus:outline-none dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
        >
          <svg
            class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
            viewBox="0 0 18 20"
          >
            <path
              d="M17.8 13.75a1 1 0 0 0-.859-.5A7.488 7.488 0 0 1 10.52 2a1 1 0 0 0 0-.969A1.035 1.035 0 0 0 9.687.5h-.113a9.5 9.5 0 1 0 8.222 14.247 1 1 0 0 0 .004-.997Z"
            ></path>
          </svg>
        </button>
      </div>
    </div>
  </div>
  <div
    class="block w-full text-gray-900 bg-white border border-t-0 border-gray-200 rounded-t-none shadow-sm sm:text-sm
    dark:bg-gray-900 dark:border-gray-600 dark:text-white block-canvas p-10 grid grid-cols-2 gap-2"
  >
    <div>
      <x-dynamic-component :component="$currentComponent">
        My button
      </x-dynamic-component>
    </div>
    <div>
      @foreach($props as $prop => $values)
        <div class="my-2">
          <label for="{{ $prop }}">{{ $prop }}</label>
          @foreach($values as $value)
              <button class="py-1 px-2 mx-2 bg-blue-500 text-white rounded">{{ $value }}</button>
          @endforeach
        </div>
      @endforeach
    </div>
  </div>
</div>