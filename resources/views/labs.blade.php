<x-layout>
    <x-slot name="slot">
        <div class="container conlabs">
            <div class="row">

                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="./images/{{ $labs->photo }}" class="img-fluid img-thumbnail" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $labs->name }}</h5>
                            <a href="#" class="card-link">Phone {{ $labs->phone }}</a>
                            <blockquote class="blockquote mb-0">
                                <p>Information</p>
                                <footer class="blockquote-footer">Address {{ $labs->address }} </footer>
                            </blockquote>
                            <a href="/labs/{{ $labs->id }}" class="btn btn-primary">More information</a>
                        </div>
                    </div>
                    <!-- Content here -->
                </div>ٍ

            </div>
        </div>
    </x-slot>
</x-layout>
