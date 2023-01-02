@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block pl-3 pr-4 py-2 border-red-200 text-base font-medium text-red-700 bg-white focus:outline-none focus:  transition duration-150 ease-in-out'
            : 'block pl-3 pr-4 py-2   text-base font-medium text-gray-800 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
