@extends('layout')
@section('content')

    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('warehouse') }}">Warehouses Alert</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('warehouse') }}">View All warehouse</a></li>
            <li><a href="{{ URL::to('warehouse/create') }}">Create a warehouse</a>
        </ul>
    </nav>

    <h1>Showing {{ $warehouse->location }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $warehouse->manager }}</h2>
        <p>
            <strong>Capacity:</strong> {{ $warehouse->capacity }}<br>
            <strong>Contact:</strong> {{ $warehouse->contact }}
            <strong>Status:</strong> {{ $warehouse->status }}
        </p>
    </div>

@stop