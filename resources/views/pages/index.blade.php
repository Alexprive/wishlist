@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center top10">
        <h1 class="display-4">Wishlist App</h1>
        <p class="lead">Beheer en toon je wishlist middels deze App</p>
        <div class="row top20">
            <div class="col-md-4 col-sm-4">

            </div>

            <div class="col-md-4 col-sm-4">
                <img src="/img/blacksanta.jpg" height="204px" width="180px" align="center">
            </div>

            <div class="col-md-4 col-sm-4">

            </div>
        </div>
        <!--<hr class="my-4">-->
        {{--<p class="lead"></p>--}}
        <p class="lead top10">
            <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
            <a class="btn btn-success btn-lg" href="/register" role="button">register</a>
        </p>
    </div>
@endsection