@extends('layouts.app')

@section('content')
    <h1>Wishlists</h1>
    @if (count($wishlists) > 0)
        <ul class="list-group">
            @foreach ($wishlists as $wishlist)
                <div class="row top">
                    <div class="col-md-12 col-sm-12">
                        <div class="card padding15">
                            <h3><a href="/wishlists/{{$wishlist->id}}">{{$wishlist->name}}</a></h3>
                            <small>Added at {{$wishlist->created_at}}</small>
                        </div>
                    </div>

                </div>
            @endforeach
            {{ $wishlists->links() }}
        </ul>
    @else
        <p>Geen wishlists gevonden!</p>
    @endif

@endsection