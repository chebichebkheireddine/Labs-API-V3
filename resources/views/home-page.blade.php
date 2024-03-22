<x-layout>
    <x-nav-comp></x-nav-comp>
    <div class="container conlabs py-4">
        <div class="row">
            @include('components.dropdown-analyses')

            <div class="row ">
                @if ($labs->count())
                    <x-card-labs :labs="$labs"></x-card-labs>
                @else
                    <div class="col-md-8">
                        <div class='alert alert-primary' role='alert'>
                            No labs or analyses found with this name
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-layout>
