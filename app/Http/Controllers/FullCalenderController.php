<?php

namespace App\Http\Controllers;

use App\Models\SchoolEvent;
use Illuminate\Http\Request;

class FullCalenderController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()) {
            $events = SchoolEvent::all(['id', 'title', 'start', 'end']); // Fetch all events
            return response()->json($events);
        }

        return view('fullcalender');
    }

    public function ajax(Request $request)
    {
        if ($request->type == 'add') {
            $event = SchoolEvent::create([
                'title' => $request->title,
                'start' => $request->start,
                'end' => $request->end,
            ]);
            return response()->json($event);
        } else if ($request->type == 'update') {
            $event = SchoolEvent::findOrFail($request->id); // Find the event
            $event->update([
                'title' => $request->title,
                'start' => $request->start,
                'end' => $request->end,
            ]);
            return response()->json($event);
        } else if ($request->type == 'delete') {
            $event = SchoolEvent::findOrFail($request->id); // Find the event
            $event->delete();
            return response()->json(['status' => 'success']);
        }
    }
}
