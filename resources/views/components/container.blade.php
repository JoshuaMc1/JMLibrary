@props([
    'class' => '',
    'id' => 'container',
])

<main {{ $attributes->merge(['class' => 'container ' . $class, 'id' => $id]) }}>
    {{ $slot }}
</main>
