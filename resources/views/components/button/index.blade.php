@props([
  'icon' => false,
  'size' => 'm',
  'color' => 'blue',
  'rounded' => 'normal',
  'outlined' => false,
  'iconPosition' => 'left'
])
<button
  @class([
  "px-3 py-2 text-xs" => $size === 'xs',
  "px-3 py-2 text-sm" => $size === 's',
  "px-5 py-2.5 text-sm" => $size === 'm',
  "px-5 py-3 text-base" => $size === 'lg',
  "px-6 py-3.5 text-base" => $size === 'xl',
  "rounded-lg" => $rounded === 'normal',
  "rounded-none" => $rounded === 'none',
  "rounded-full" => $rounded === 'full',
  "font-medium text-center inline-flex items-center focus:ring-4 focus:outline-none focus:ring-{$color}-300 dark:focus:ring-{$color}-800",
  "hover:bg-{$color}-800 dark:bg-{$color}-600 dark:hover:bg-{$color}-700 text-white bg-{$color}-700" => !$outlined,
  "text-{$color}-700 hover:text-white border border-{$color}-700 hover:bg-{$color}-800 dark:border-{$color}-500 dark:text-{$color}-500 dark:hover:text-white dark:hover:bg-{$color}-500" => $outlined
  ])
>
  @if($icon && $iconPosition === 'left')
    <svg
      @class([
        "w-3 h-3" => $size === 'xs' || $size === 's',
        "w-3.5 h-3.5" => $size === 'm',
        "w-4 h-4" => $size === 'lg' || $size === 'xl',
        "me-2",
      ])
      aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
      viewBox="0 0 20 16"
    >
      <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z"/>
      <path
        d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z"
      />
    </svg>
  @endif
  {{ $slot }}
  @if($icon && $iconPosition === 'right')
    <svg
      @class([
        "w-3 h-3" => $size === 'xs' || $size === 's',
        "w-3.5 h-3.5" => $size === 'm',
        "w-4 h-4" => $size === 'lg' || $size === 'xl',
        "ms-2"
      ])
      aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
      viewBox="0 0 20 16"
    >
      <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z"/>
      <path
        d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z"
      />
    </svg>
  @endif
</button>