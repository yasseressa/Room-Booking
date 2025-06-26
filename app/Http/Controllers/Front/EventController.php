<?php

namespace App\Http\Controllers\Front;

use App\Model\Event;

class EventController extends FrontController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::where('status', 1)
            ->orderBy('id', 'asc')
            ->get();

        return response(view('front.event.index')->with([
            'events' => $events,
        ]));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::findOrFail($id)->where('status', 1)->get();

        return view('front.event.profile')
            ->with([
                'event' => $event,
            ]);
    }
}
