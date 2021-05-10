@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-bold text-xs tracking-wider text-gray-700']) }}>
    {{ $value ?? $slot }}
</label>
