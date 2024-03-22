<div class="row">
    <div class="col-3">
        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
                aria-expanded="false">
                {{ isset($currentLab) ? $currentLab->name : 'All Labs' }}
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="overflow: auto;max-height: 300px;">
                @foreach ($analyses as $item)
                    <li><a class="dropdown-item" href="/Analyses/{{ $item->id }}">{{ $item->name }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="col-6">
        <form action="#" method="get">
            <div class="input-group">
                <input type="text" name="search" class="form-control" value="{{ request('search') }}"
                    placeholder="Search">
            </div>
        </form>
    </div>
</div>
