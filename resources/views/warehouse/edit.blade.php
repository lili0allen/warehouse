@extends('layout')
@section('content')

    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('warehouse') }}">warehouse Alert</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('warehouse') }}">View All warehouse</a></li>
            <li><a href="{{ URL::to('warehouse/create') }}">Create a warehouse</a>
        </ul>
    </nav>

    <h1>Edit a warehouse</h1>


    {{ Form::model($warehouse, array('route' => array('warehouse.update', $warehouse->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('location', 'Location') }}
        {{ Form::text('location', null, ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('manager', 'Manager') }}
        {{ Form::text('manager', null, ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('capacity', 'Capacity') }}
        {{ Form::text('capacity', null, ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('contact', 'Contact') }}
        {{ Form::text('contact', null, ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('status', 'Status') }}
        {{ Form::select('status', ['0'=>'inactive', '1'=>'active'], ['class' => 'form-control']) }}
    </div>

    {{ Form::submit('Edit the warehouse!', ['class' => 'btn btn-primary']) }}

    {{ Form::close() }}

@stop