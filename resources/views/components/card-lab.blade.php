@props(['labs'])

<div class="card mb-4 shadow-sm mx-auto ">
    <img src=".../images/{{ $labs->photo }}" class="img-fluid img-thumbnail " alt="...">
    <div class="card-body">
        <h5 class="card-title">{{ $labs->name }}</h5>
        <a href="#" class="card-link">Phone {{ $labs->phone }}</a>
        <blockquote class="blockquote mb-0">
            <p>Information</p>
            <footer class="blockquote-footer">Address {{ $labs->address }} </footer>
            <p>available analysis </p>
            @foreach ($labs->analyses as $analysis)
                <a href="/labs/?analyses={{ $analysis->name }}" type="button"
                    class="btn btn-outline-primary">{{ $analysis->name }}</a>
            @endforeach
        </blockquote>
        <a href="/labs/{{ $labs->id }}" class="btn btn-primary  bg-blue-300">More information</a>
    </div>

</div>
