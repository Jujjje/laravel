<x-layout>
    <h2>Currently available ninjas</h2>
    <a href="/">home</a>

    <ul>
        @foreach ($ninjas as $ninja)
            <li>
                <x-card href="{{ route('ninjas.show', $ninja->id) }}" :highlight="true">
                    <h3>{{ $ninja['name'] }}</h3>
                </x-card>
            </li>
        @endforeach
    </ul>
</x-layout>