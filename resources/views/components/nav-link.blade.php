@props(['active'])

@php
$classes = ($active ?? false)
? 'bg-indigo-800 text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md transition'
: 'text-indigo-100 hover:bg-indigo-600 group flex items-center px-2 py-2 text-sm font-medium rounded-md transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
