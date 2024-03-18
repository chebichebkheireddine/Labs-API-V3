<x-layout>
    <x-nav-comp></x-nav-comp>
        <div class="container conlabs">
            <div class="row">
                
                @foreach ($labs as $lab)
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $lab->name }}</h5>
                                <a href="/labs/{{$lab->lab_id}}" class="card-link">Lab {{ $lab->labs->name }}</a>
                                <blockquote class="blockquote mb-0">
                                    <p>Information</p>
                                    <footer class="blockquote-footer">Address {{ $lab->parms }} </footer>
                                    <footer class="blockquote-footer">value {{ $lab->value }} </footer>
                                    <footer class="blockquote-footer">result {{ $lab->result }} </footer>
                                    <footer class="blockquote-footer">result {{ $lab->labs->name }} </footer>
                                </blockquote>
                                <a href="/labs/{{ $lab->id }}" class="btn btn-primary">More information</a>
                            </div>
                        </div>
                        <!-- Content here -->
                    </div>ٍ
                @endforeach
            </div>
        </div>
    

</x-layout>
