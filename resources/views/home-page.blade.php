
<x-layout>
    {{-- This is the layout to call --}}
    @foreach ($labs as $lab)
    {{$lab->name}}
        
    @endforeach
</x-layout>