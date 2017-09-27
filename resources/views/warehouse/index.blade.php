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

    <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>ID</td>
            <td>Location</td>
            <td>Manager</td>
            <td>Capacity</td>
            <td>Contact</td>
            <td>Status</td>
            <td>Actions</td>
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

                <!-- we will also add show, edit, and delete buttons -->
                <td>

                    <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                    <!-- we will add this later since its a little more complicated than the other two buttons -->

                    <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                    <a class="btn btn-small btn-success" href="{{ URL::to('warehouse/' . $value->id) }}">Show this warehouse</a>

                    <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                    <a class="btn btn-small btn-info" href="{{ URL::to('warehouse/' . $value->id . '/edit') }}">Edit this warehouse</a>

                    {{ Form::open(array('url' => 'warehouse/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete this warehouse', array('class' => 'btn btn-warning')) }}
                    {{ Form::close() }}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@stop