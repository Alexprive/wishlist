<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wishlist;
use App\Event;
use App\User;


class WishlistsController extends Controller
{

    public function index()
    {
        $wishlists = Wishlist::orderBy('name', 'asc')->paginate(10);

        return view('wishlists.index')->with('wishlists', $wishlists);
    }


    public function create()
    {
        $events = Event::pluck('name', 'id');

        return view('wishlists.create')->with('events', $events);;
    }



    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'event' => 'required'
        ]);

        $wishlist = new Wishlist();
        $wishlist->name = $request->input('name');
        $wishlist->event_id = $request->input('event');
        $wishlist->wishlist = $request->input('wishlist');
        $wishlist->user_id = auth()->user()->id;
        $wishlist->save();

        return redirect('/wishlists')->with('success', 'Wishlist Created');
    }


    public function show($id)
    {
        $wishlist = Wishlist::find($id);
        $events = Event::where('id', $wishlist->event_id)->first();

        $data =  array (
            'wishlist' => $wishlist,
            'events' => $events
        );

        return view('wishlists.show')->with($data);
    }


    public function edit($id)
    {
        $wishlist = Wishlist::find($id);
        $events = Event::pluck('name', 'id');

        $data =  array (
            'wishlist' => $wishlist,
            'events' => $events
        );


        return view('wishlists.edit')->with($data);
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'event' => 'required'
        ]);

        $wishlist = Wishlist::find($id);

        $wishlist->name = $request->input('name');
        $wishlist->event_id = $request->input('event');
        $wishlist->wishlist = $request->input('wishlist');
        $wishlist->user_id = auth()->user()->id;

        $wishlist->save();

        return redirect('/wishlists')->with('success', 'Wishlist Updated');
    }


    public function destroy($id)
    {
        $wishlist = Wishlist::find($id);

        $wishlist->delete();

        return redirect('/wishlists')->with('success', 'Wishlist Removed');
    }
}
