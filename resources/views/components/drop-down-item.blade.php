<div class="dropdown">
    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
        {{ isset($currentLab) ? $currentLab->name : 'Analyses' }}
    </button>
    <ul class="dropdown-menu" style="overflow: auto;max-height: 300px;">
        @foreach ($analyses as $item)
            @if (route('home-page'))
                <li><a class="dropdown-item" href="/labs/?labs={{ $item->id }}">{{ $item->name }}</a>
                @elseif (route('labs'))
                <li><a class="dropdown-item" href="/labs/?labs={{ $item->id }}">{{ $item->name }}</a>
            @endif
            </li>
        @endforeach
    </ul>
</div>
