@props(['highlight' => false])

<div @class(['highlight' => $highlight]) class="card">
    {{ $slot }}
    <a href="{{ $attributes->get('href') }}" class="btn">View details</a>
</div>