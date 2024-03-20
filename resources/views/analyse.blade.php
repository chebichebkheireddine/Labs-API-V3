<x-layout>
    <x-nav-comp>
        <x-btn-filter></x-btn-filter>

    </x-nav-comp>
    <div class="container conlabs">
        <div class="row">
            <div class="col-3">

                <div class="dropdown">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                        Analyses
                    </button>
                    <ul class="dropdown-menu">
                        @foreach ($analyses as $item)
                            <li><a class="dropdown-item" href="/Analyses/{{ $item->id }}">{{ $item->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $analyse->name }}</h5>
                        <a href="#" class="card-link"> {{ $analyse->name }}</a>
                        <blockquote class="blockquote mb-0">
                            <p>Information</p>
                            <footer class="blockquote-footer">Address {{ $analyse->value }} </footer>
                            <footer class="blockquote-footer">Address {{ $analyse->parms }} </footer>
                            <footer class="blockquote-footer">Address {{ $analyse->result }} </footer>
                        </blockquote>
                        <a href="/labs/{{ $analyse->id }}" class="btn btn-primary  bg-blue-300">More information</a>
                    </div>
                </div>
                <!-- Content here -->
            </div>ٍ

        </div>
    </div>
</x-layout>
