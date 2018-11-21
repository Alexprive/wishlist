@extends('layouts.app')

@section('content')
    <h1>Events</h1>
    @if (count($events) > 0)
        <ul class="list-group">
            @foreach ($events as $event)
                <div class="row top">
                    <div class="col-md-12 col-sm-12">
                        <div class="card padding15">
                            <h3><a href="/events/{{$event->id}}">{{$event->name}}</a></h3>
                            <small>Added at {{$event->created_at}}</small>
                        </div>
                    </div>

                </div>
            @endforeach
            {{ $events->links() }}
        </ul>
    @else
        <p>Geen events gevonden!</p>
    @endif

@endsection