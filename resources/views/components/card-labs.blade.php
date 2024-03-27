@props(['labs'])
<div class="row">
    @foreach ($labs as $lab)
        <div class="col-4">
            <div class="card  mb-4 shadow-sm mx-auto ">
                <img src="../images/{{ $lab->photo }}" class="img-fluid img-thumbnail" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $lab->name }}</h5>
                    <a href="#" class="card-link">Phone {{ $lab->phone }}</a>
                    <blockquote class="blockquote mb-0">
                        <p>Information</p>
                        <footer class="blockquote-footer">Address {{ $lab->address }} </footer>
                        <p>available analysis </p>
                        @foreach ($lab->analyses as $analysis)
                            <a href="/Analyses/{{ $analysis->lab_id }}" type="button"
                                class="btn btn-outline-primary">{{ $analysis->name }}</a>
                        @endforeach
                    </blockquote>

                    <a href="/labs/?labs={{ $lab->id }}" class="btn btn-primary">More information</a>
                </div>
            </div>
            <!-- Content here -->
        </div>ٍ
    @endforeach
</div>
