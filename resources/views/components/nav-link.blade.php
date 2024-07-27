@props(['active' => false])
<a {{ $attributes }}
   class="{{ $active ? 'bg-gray-900' : ''  }} rounded-md px-3 py-2 text-sm font-medium text-white"
>{{ $slot }}</a>
