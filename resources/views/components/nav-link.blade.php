@props(['active' => false, 'navigate' => true])

@php
$classes = $active
    ? 'text-yellow-400 font-bold'
    : 'text-gray-300 hover:text-yellow-400';
@endphp

<a {{ $navigate ? 'wire:navigate=""' : '' }} {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
