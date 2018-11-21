@extends('layouts.app')

@section('content')
    <h1 class="text-center top20">Create Event</h1>
    <div class="formdiv">
        {!! Form::open(['action' => 'EventsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name of the event'])}}
        </div>
        <div class="form-group">
            {{Form::label('date', 'Date')}}
            {{Form::text('date', '', ['class' => 'form-control', 'placeholder' => 'Date of the event'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection
