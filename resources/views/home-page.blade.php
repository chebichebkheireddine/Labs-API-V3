<x-layout>
    <x-nav-comp></x-nav-comp>
    <div class="container conlabs">
        @include('components.dropdown-analyses')


        @if ($labs->count())
            <x-card-labs :labs="$labs">
            </x-card-labs>
        @else
            <div>

            </div>
            <div class='alert alert-primary' role='alert'>
                no labs or analyses found with this name
            </div>
        @endif

    </div>


</x-layout>
