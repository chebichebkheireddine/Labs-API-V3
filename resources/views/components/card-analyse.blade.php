@props(['analyse'])
<div class="col-md-2">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $analyse->name }}</h5>
            <a href="#" class="card-link"> {{ $analyse->name }}</a>
            <blockquote class="blockquote mb-0">
                <p>Information</p>
                <footer class="blockquote-footer">Parms {{ $analyse->parms }} </footer>
                <footer class="blockquote-footer">Value {{ $analyse->value }} </footer>
            </blockquote>
            <a href="/labs/{{ $analyse->id }}" class="btn btn-primary  bg-blue-300">More information</a>
        </div>
    </div>
    <!-- Content here -->
</div>ٍ
