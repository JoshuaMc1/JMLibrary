@props([
    'class' => '',
    'location' => 'top-4 right-4',
])

<div {{ $attributes->merge(['class' => sprintf('absolute z-[40] %s %s', $class, $location)]) }}>
    {{ $slot }}
</div>
