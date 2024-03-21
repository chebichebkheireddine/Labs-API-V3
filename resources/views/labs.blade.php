<x-layout>
    <x-nav-comp>
        <x-btn-filter></x-btn-filter>

    </x-nav-comp>
    <div class="container conlabs">
        @include('components.dropdown-analyses')

        <div class="row">
            <div class="col-2">
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
    </div>
</x-layout>
