@props([
    'class' => 'ghost',
])

<form action="{{ route('language.set') }}" method="POST">
    @csrf
    <select name="language" id="languageSwitch" {{ $attributes->merge(['class' => 'select ' . $class]) }}
        aria-label="Select language">
        <option value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>
            {{ trans('lang.en') }}
        </option>
        <option value="es" {{ app()->getLocale() == 'es' ? 'selected' : '' }}>
            {{ trans('lang.es') }}
        </option>
    </select>
</form>
