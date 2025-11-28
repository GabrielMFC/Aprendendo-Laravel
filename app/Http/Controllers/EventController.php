<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index(){
        return view('home');
    }

    public function myEvents(){
        $events = Event::all();
        return view(
            'event.myEvents',
            ['events' => $events]
        );
    }

    public function create(){
        return view(
            'event.create'
        );
    }
    public function store(Request $request){
        $event = new Event;
        // $event->date = $request->input('date');
        $event->name = $request->input('name');
        $event->description = $request->input('description');
        $event->location = $request->input('location');
        $event->private = $request->input('private');
        $event->save();

        return redirect('/myEvents');

    }

    public function signIn(){
        return view(
            'sign.in'
        );
    }

    public function signUp(){
        return view(
            'sign.up'
        );
    }
}
