<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventsController extends Controller
{

    public function index()
    {
        $events = Event::orderBy('name', 'asc')->paginate(10);
        return view('events.index')->with('events', $events);
    }


    public function create()
    {
        return view('events.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'date' => 'required'
        ]);

        $event = new Event;
        $event->name = $request->input('name');
        $event->date = $request->input('date');
        $event->save();

        return redirect('/events')->with('success', 'Event Created');
    }

    public function show($id)
    {
        $event = Event::find($id);

        return view('events.show')->with('event', $event);
    }


    public function edit($id)
    {
        $event = Event::find($id);

        return view('events.edit')->with('event', $event);
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'date' => 'required'
        ]);

        $event = Event::find($id);
        $event->name = $request->input('name');
        $event->date = $request->input('date');

        $event->save();

        return redirect('/events')->with('success', 'Event Updated');
    }


    public function destroy($id)
    {
        $event = Event::find($id);

        $event->delete();

        return redirect('/events')->with('success', 'Event Removed');
    }
}
