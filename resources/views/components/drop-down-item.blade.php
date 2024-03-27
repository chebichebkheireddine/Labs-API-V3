<div class="dropdown">
    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
        {{ isset($currentLab) ? $currentLab->name : 'Analyses' }}
    </button>
    <ul class="dropdown-menu" style="overflow: auto;max-height: 300px;">
        @foreach ($items as $item)
            <li><a class="dropdown-item" href="/?labs={{ $item->name }}">{{ $item->name }}</a>
            </li>
        @endforeach
    </ul>
</div>
