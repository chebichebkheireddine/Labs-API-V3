<x-layout>
    <x-nav-comp>
        <x-btn-filter></x-btn-filter>

    </x-nav-comp>
    <div class="container conlabs">
        <div class="row">
            @include('components.dropdown-analyses')

            <div class="row">
                @if ($analyse->count())
                    <x-card-analyse :analyse="$analyse">
                    </x-card-analyse>
                    <!-- Content here -->
                @endif

            </div>
        </div>
    </div>
</x-layout>
