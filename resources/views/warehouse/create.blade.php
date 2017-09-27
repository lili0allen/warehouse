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

    <h1>Create a warehouse</h1>


    {{ Form::open(['url' => 'warehouse', 'method'=>'post']) }}

    <div class="form-group">
        {{ Form::label('location', 'Location') }}
        {{ Form::text('location', null,  array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('manager', 'Manager') }}
        {{ Form::text('manager', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('capacity', 'Capacity') }}
        {{ Form::text('capacity', null,  array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('contact', 'Contact') }}
        {{ Form::text('contact', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('status', 'Status') }}
        {{ Form::select('status', array('1'=>'active', '2'=>'deactive'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Create the warehouse!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

@stop