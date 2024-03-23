@props([
  'size' => 'm',
  'icon' => false,
])
<x-button color="gray" :size="$size" :icon="$icon">
  {{ $slot }}
</x-button>
