@props([
  'label',
  'url' => "#",
  'icon' => null
])
<li>
  <a
    href="{{$url}}"
    class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100
    dark:hover:bg-gray-700 group"
  >
    {{ $icon }}
    <span class="ml-3">{{ $label }}</span>
  </a>
</li>