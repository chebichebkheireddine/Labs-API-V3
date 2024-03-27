@props(['lab'])
<p>available analysis </p>
@foreach ($lab as $analysis)
    <a href="/labs/{{ $analysis->lab_id }}" type="button" class="btn btn-outline-primary">{{ $analysis->name }}</a>
@endforeach
