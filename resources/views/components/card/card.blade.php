@props([
    'class' => '',
    'extras' => []
])

<div {{ $attributes->merge(['class' => 'card ' . $class, ...$extras]) }}>
    {{ $slot }}
</div>
