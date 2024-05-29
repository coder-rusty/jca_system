<?php

namespace App\Http\Controllers;

use App\Models\Contestant;
use Illuminate\Http\Request;

class ContestantController extends Controller
{
    public function store(Request $request) {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'photo' => 'required|string|max:255',
            'contestantNum' => 'required|integer',
            'eventID' => 'required|integer',
            'address' => 'required|string|max:255',
        ]);

        $newData = Contestant::create([
            'name' => $validatedData['name'],
            'photo' => $validatedData['photo'],
            'contestantNum' => $validatedData['contestantNum'],
            'eventID' => $validatedData['eventID'],
            'address' => $validatedData['address'],
        ]);

        return redirect(route('eventShow.show', [
            'event' => $validatedData['eventID']
        ]));
    }

    public function destroy(Request $request){
      
        Contestant::where('id', $request->contestant)->delete();

        return redirect(route('eventShow.show', [
            'event' => $request->event
        ]));
     }
}
