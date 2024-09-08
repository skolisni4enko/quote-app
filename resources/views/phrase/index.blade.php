<x-layout>
    <ul>
        @foreach($phrases as $phrase)
            <li>
                {{ $phrase->text }}
            </li>
        @endforeach
    </ul>
</x-layout>
