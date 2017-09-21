@section('content')
    <h1>Candidates</h1>
    <div>
        @forelse($warehouses as $warehouse)
            <h2>
                <a href="{{ url('/warehouse', $warehouse->id) }}">
                    {{ $warehouse->name }}
                </a>
            </h2>
            <a href="{{ route('warehouse.edit', $warehouse->id) }}">
                Edit candidate
            </a>
            <div class='body'>
                <pre>{{ $warehouse }}</pre>
            </div>

        @empty
            <p>There are no warehouse to display!</p>
        @endforelse
    </div>
@stop