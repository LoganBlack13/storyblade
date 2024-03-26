@php
  $properties = [
    'icon' => [ 'true', 'false'],
    'size' => [ 'xs', 's', 'm', 'lg', 'xl'],
    'rounded' => ['none', 'normal', 'full'],
    'outlined' => ['true', 'false'],
    'iconPosition' => ['left', 'right']
  ];
@endphp
@props([
  'size' => 'm',
  'icon' => false,
  'rounded' => 'normal',
  'outlined' => false,
  'iconPosition' => 'left',
])
<x-button
  color="amber"
  :size="$size"
  :icon="$icon"
  :rounded="$rounded"
  :outlined="$outlined"
  :icon-position="$iconPosition"
>
  {{ $slot }}
</x-button>
