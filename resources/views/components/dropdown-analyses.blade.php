<div class="col-3 d-flex justify-content-center mb-3">
    <div class="dropdown">
        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
            {{ isset($currentLab) ? $currentLab->name : 'All Labs' }}
        </button>
        <ul class="dropdown-menu" style="overflow: auto;max-height: 300px;">
            @foreach ($analyses as $item)
                <li><a class="dropdown-item" href="/Analyses/{{ $item->id }}">{{ $item->name }}</a>
                </li>
            @endforeach
        </ul>
    </div>

</div>
<div class="col-6  mt-3">
    <form action="#" method="get">
        <div class="input-group">
            <input type="text" name="sherch" class="form-control" value="{{ request('sherch') }}"
                placeholder="Search">
        </div>
</div>
</div>
