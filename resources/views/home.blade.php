@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <a href="/events/create" class="btn btn-primary">Create Event</a>
                        <a href="/wishlists/create" class="btn btn-primary">Create Wishlist</a>
                        <hr>
                        <h3 class="top">Your Wishlists</h3>
                        @if(count($wishlists) > 0)
                            <table class="table table-striped">
                                <tr>
                                    <th>Naam</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                @foreach($wishlists as $wishlist)
                                    <tr>
                                        <td>{{$wishlist->name}}</td>
                                        <td>
                                            <a href="/wishlists/{{$wishlist->id}}" class="btn btn-success">Toon</a>
                                            <a href="/wishlists/{{$wishlist->id}}/edit" class="btn btn-primary">Wijzig</a>
                                        </td>
                                        <td>
                                            {!!Form::open(['action' => ['WishlistsController@destroy', $wishlist->id], 'method' => 'POST', 'class' => 'float-left'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                            {!!Form::close()!!}
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        @else
                            <p>You have no wishlists</p>
                        @endif
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
