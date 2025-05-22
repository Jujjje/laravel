<x-layout>
    <h2>Currently available ninjas</h2>
    <a href="/">home</a>

    <ul>
        @foreach ($ninjas as $ninja)
            <li>
                <x-card href="{{ route('ninjas.show', $ninja->id) }}" :highlight="true">
                    <div class="">
                        <h3>{{ $ninja['name'] }}</h3>
                        <p>{{ $ninja->dojo->name }}</p>
                    </div>
                </x-card>
            </li>
        @endforeach
    </ul>

    {{ $ninjas->links() }}
</x-layout>