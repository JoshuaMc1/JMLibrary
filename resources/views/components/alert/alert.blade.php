@props([
    'message' => '',
    'type' => 'info',
])

@switch($type)
    @case('info')
        <x-alert.types.info :message="$message" />
    @break

    @case('success')
        <x-alert.types.success :message="$message" />
    @break

    @case('warning')
        <x-alert.types.warning :message="$message" />
    @break

    @case('error')
        <x-alert.types.error :message="$message" />
    @break

    @case('base')
        <x-alert.types.base :message="$message" />
    @break

    @default
        <x-alert.types.base :message="$message" />
@endswitch
