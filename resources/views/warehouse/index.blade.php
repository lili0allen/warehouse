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

    <h1>All the warehouses</h1>

    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Location</th>
            <th>Manager</th>
            <th>Capacity</th>
            <th>Contact</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($warehouses as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->location }}</td>
                <td>{{ $value->manager }}</td>
                <td>{{ $value->capacity }}</td>
                <td>{{ $value->contact }}</td>
                <td>{{ $value->status }}</td>

                <td>

                    <a class="btn btn-small btn-success" href="{{ URL::to('warehouse/' . $value->id) }}">Show this warehouse</a>

                    <a class="btn btn-small btn-info" href="{{ URL::to('warehouse/' . $value->id . '/edit') }}">Edit this warehouse</a>

                    {{ Form::open(['url' => 'warehouse/' . $value->id, 'class' => 'pull-right']) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete this warehouse', ['class' => 'btn btn-warning']) }}
                    {{ Form::close() }}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@stop