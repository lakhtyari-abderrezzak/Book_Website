@props(['href', 'active' => false])
<a  
href="{{ $href }}"
{{ $attributes->class([
    'text-gray-300 hover:text-yellow-400',
    'text-yellow-400 font-bold' => $active
]) }} wire:navigate>

{{ $slot }}
</a>