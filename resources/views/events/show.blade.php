@extends('layouts.app')

@section('content')
    <h1>{{ $event->name }}</h1>
    <hr>
    <div class="">
        {!!   $event->date !!}
    </div>
    <hr>
    <small>Event created at {{ $event->created_at }}</small>
    <hr>
    <a href="/events" class="btn btn-success">Terug</a>
    @if(!Auth::guest())
            <a href="/events/{{$event->id}}/edit" class="btn btn-primary">Bewerken</a>
            {!! Form::open(['action' => ['EventsController@destroy', $event->id], 'method' => 'POST', 'class' => 'float-right']) !!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!! Form::close() !!}
    @endif
@endsection
