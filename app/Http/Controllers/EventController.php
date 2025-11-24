<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $nome = "Gabriel";
        return view(
            'home', [
                "nome" => $nome
        ]);
    }

    public function events(){
        return view(
            'event.myEvents'
        );
    }

    public function create(){
        return view(
            'event.create'
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
