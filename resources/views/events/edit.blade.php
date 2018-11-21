@extends('layouts.app')

@section('content')
    <h1>Edit Events</h1>
    {!! Form::open(['action' => ['EventsController@update', $event->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name', $event->name, ['class' => 'form-control', 'placeholder' => 'Name of the event'])}}
    </div>
    <div class="form-group">
        {{Form::label('date', 'Date')}}
        {{Form::text('date', $event->date, ['class' => 'form-control', 'placeholder' => 'Date of the event'])}}
    </div>
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

    {!! Form::close() !!}


@endsection