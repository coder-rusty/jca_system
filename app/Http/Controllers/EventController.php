<?php

namespace App\Http\Controllers;
use App\Models\Event;
use App\Models\Contestant;
use App\Models\Judge;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        $events = Event::all();
   
        return view('facilitator.dashboard.index',[
            'events' => $events->reverse()
        ]);
     }
    public function store(Request $request) {
        $data = $request->validate([
            'title' => 'required',
            'date' => 'required',
            'startTime' => 'required',
            'location' => 'required',
            
        ]);
    
        $newData = Event::create($data);
        return redirect(route('eventShow.show', [
            'event' => $newData->id
        ]));
     }

     public function destroy(Request $request, Event $event) {
        $event->delete();

        return redirect(route('event.index'));
       
     }
     public function show(Request $request) {
        $events = Event::all()->where('id', $request->event);
        $contestants = Contestant::all()->where('eventID', $request->event);
        $judges = Judge::all()->where('eventID', $request->event);

        return view('facilitator.singleEvent.index', [
            'event' => $events->first(),
            'contestants' => $contestants,
            'judges' => $judges
        ]);
     }
}
