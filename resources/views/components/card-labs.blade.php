@props(['labs'])
<div class="row">
    @foreach ($labs as $lab)
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <img src="./images/{{ $lab->photo }}" class="img-fluid img-thumbnail" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $lab->name }}</h5>
                    <a href="#" class="card-link">Phone {{ $lab->phone }}</a>
                    <blockquote class="blockquote mb-0">
                        <p>Information</p>
                        <footer class="blockquote-footer">Address {{ $lab->address }} </footer>
                    </blockquote>
                    <a href="/labs/{{ $lab->id }}" class="btn btn-primary">More information</a>
                </div>
            </div>
            <!-- Content here -->
        </div>ٍ
    @endforeach
</div>
