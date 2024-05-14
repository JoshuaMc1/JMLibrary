@props([
    'class' => '',
    'extras' => []
])

<div {{ $attributes->merge(['class' => 'card-body ' . $class, ...$extras]) }}>
    {{ $slot }}
</div>
