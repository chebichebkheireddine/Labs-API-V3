<x-layout>
    <br>
        
    @foreach ($labs as $lab)
        {{ $lab->name }}
    @endforeach
</x-layout>
