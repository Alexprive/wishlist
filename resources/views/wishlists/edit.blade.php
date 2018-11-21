@extends('layouts.app')

@section('content')
    <h1 class="text-center top20">Edit Wishlist</h1>
    <div class="formdiv">
        {!! Form::open(['action' => ['WishlistsController@update', $wishlist->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', $wishlist->name, ['class' => 'form-control', 'placeholder' => 'Name of your wishlist'])}}
        </div>
        <div class="form-group">
            {{Form::label('event', 'Event')}}
            {{ Form::select('event', $events, NULL, ['id' => 'event', 'class' => 'form-control', 'placeholder' => 'Pick an event...']) }}
        </div>
        <div class="form-group">
            {{Form::label('wishlist', 'Wishlist')}}
            {{Form::textarea('wishlist', $wishlist->wishlist, ['class' => 'form-control textarea', 'placeholder' => 'Verlanglijstje'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection