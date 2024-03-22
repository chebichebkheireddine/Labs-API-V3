<x-layout>
    <x-nav-comp>
        <x-btn-filter></x-btn-filter>

    </x-nav-comp>
    <div class="container conlabs">
        <div class="row">
            @include('components.dropdown-analyses')

            @if ($labs->count())
                <x-card-lab :labs="$labs">

                </x-card-lab>
                <!-- Content here -->
            @else
                <div class='alert alert-primary' role='alert'>
                    no labs or analyses found with this name
                </div>
            @endif
        </div>ٍ


    </div>
</x-layout>
