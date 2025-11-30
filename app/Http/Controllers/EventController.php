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

        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/events'), $imageName);

            $event->image = $imageName;
        }

        $event->save();

        return redirect('/myEvents')->with('msg', 'Evento criado com sucesso!');

    }

    public function show($id){
        $event = Event::findOrFail($id);

        return view(
            'event.show',
            ['event' => $event]
        );
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
