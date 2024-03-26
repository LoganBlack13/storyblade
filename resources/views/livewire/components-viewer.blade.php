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
      {!! $dynamicComponent !!}
    </div>
    <div class="grid grid-cols-2 gap-2">
      <div>
        <label for="slot">Slot content</label>
      </div>
      <div>
        <textarea
          wire:model.live.debounce="slot"
          name="slot"
          >
        </textarea>
      </div>
      @foreach($availableProps as $prop => $values)
        <div wire:key="{{time().$prop}}">
          <label for="{{ $prop }}">{{ $prop }}</label>
        </div>
        <div
          class="flex flex-wrap gap-2"
          wire:key="{{time().$prop}}"
        >
          @foreach($values as $value => $state)
            <button
              @class([
                'py-1 px-2 mx-2 rounded',
                'bg-blue-500 text-white' => $state,
                'bg-white border border-blue-500 text-blue-500' => !$state
              ])
              wire:click="updateProps('{{ $prop }}', '{{$value}}')"
            >
              {{ $value }}
            </button>
          @endforeach
        </div>
      @endforeach
    </div>
  </div>
</div>