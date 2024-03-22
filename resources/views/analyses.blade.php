<x-layout>
    <x-nav-comp></x-nav-comp>
    <div class="container conlabs">
        @include('components.dropdown-analyses')
        <div class="row">

            @if ($analyses->count())
                <x-card-analyses :analyses="$analyses">
                </x-card-analyses>
                <!-- Content here -->
            @else
                <div class='alert alert-primary' role='alert'>
                    no labs or analyses found with this name
                </div>
            @endif

        </div>
    </div>


</x-layout>
