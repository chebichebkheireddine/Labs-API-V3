<div class="row">
    <div class="col-3">
        <div class="dropdown">
            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                {{ isset($currentLab) ? $currentLab->name : 'All Labs' }}
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
