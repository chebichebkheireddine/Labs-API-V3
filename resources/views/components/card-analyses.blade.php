@props(['analyses'])
<div class="row">
    @foreach ($analyses as $lab)
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $lab->name }}</h5>
                    <a href="/labs/{{ $lab->lab_id }}" class="card-link">Lab {{ $lab->labs->name }}</a>
                    <blockquote class="blockquote mb-0">
                        <p>Information</p>
                        <footer class="blockquote-footer">Parms {{ $lab->parms }} </footer>
                        <footer class="blockquote-footer">value {{ $lab->value }} </footer>
                        <footer class="blockquote-footer">labs name : {{ $lab->labs->name }} </footer>
                    </blockquote>
                    <a href="/Analyses/{{ $lab->id }}" class="btn btn-primary">More information</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
<!-- Content here -->
