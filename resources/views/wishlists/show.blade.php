@extends('layouts.app')

@section('content')
    <h1>{{ $wishlist->name }}</h1>
    <hr>
    <div class="">
        <h3>Chosen event: {!!   $events->name !!} </h3>
        <br>
        {{ $wishlist->wishlist }}
    </div>
    <hr>
    <small>Wishlist created at {{ $wishlist->created_at }}</small>
    <hr>
    <a href="/wishlists" class="btn btn-success">Terug</a>
    @if(!Auth::guest())
        <a href="/wishlists/{{$wishlist->id}}/edit" class="btn btn-primary">Bewerken</a>
        {!! Form::open(['action' => ['WishlistsController@destroy', $wishlist->id], 'method' => 'POST', 'class' => 'float-right']) !!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!! Form::close() !!}
    @endif
@endsection