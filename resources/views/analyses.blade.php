<x-layout>
    <x-nav-comp></x-nav-comp>
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
            @foreach ($analyses as $lab)
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $lab->name }}</h5>
                            <a href="/labs/{{ $lab->lab_id }}" class="card-link">Lab {{ $lab->labs->name }}</a>
                            <blockquote class="blockquote mb-0">
                                <p>Information</p>
                                <footer class="blockquote-footer">Address {{ $lab->parms }} </footer>
                                <footer class="blockquote-footer">value {{ $lab->value }} </footer>
                                <footer class="blockquote-footer">result {{ $lab->result }} </footer>
                                <footer class="blockquote-footer">result {{ $lab->labs->name }} </footer>
                            </blockquote>
                            <a href="/Analyses/{{ $lab->id }}" class="btn btn-primary">More information</a>
                        </div>
                    </div>
                    <!-- Content here -->
                </div>ٍ
            @endforeach
        </div>
    </div>


</x-layout>