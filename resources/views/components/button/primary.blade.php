@props([
  'size' => 'm',
  'icon' => false,
  'rounded' => 'normal',
  'outlined' => false,
  'iconPosition' => 'left',
])
<x-button
  color="blue"
  :size="$size"
  :icon="$icon"
  :rounded="$rounded"
  :outlined="$outlined"
  :icon-position="$iconPosition"
>
  {{ $slot }}
</x-button>
