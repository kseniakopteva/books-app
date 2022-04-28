@props(['active' => false])

@php
$classes = 'block text-left px-3 text-sm hover:bg-stone-300 focus:bg-stone-300 leading-6';
if ($active) $classes .= ' bg-stone-200';
@endphp

<a {{ $attributes(['class' => $classes]) }}>{{ $slot }}</a>
