<x-layout>
    <x-nav-comp>
        <x-btn-filter></x-btn-filter>

    </x-nav-comp>
    <div class="container conlabs">
        @include('components.dropdown-analyses')

        <div class="row">
            <div class="col-2">
                <div class="card" style="width: 18rem;">
                    <img src="../images/{{ $labs->photo }}" class="img-fluid img-thumbnail" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $labs->name }}</h5>
                        <a href="#" class="card-link">Phone {{ $labs->phone }}</a>
                        <blockquote class="blockquote mb-0">
                            <p>Information</p>
                            <footer class="blockquote-footer">Address {{ $labs->address }} </footer>
                        </blockquote>
                        <a href="/labs/{{ $labs->id }}" class="btn btn-primary  bg-blue-300">More information</a>
                    </div>
                </div>
                <!-- Content here -->
            </div>ٍ

        </div>
    </div>
</x-layout>
