<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $nome = "Gabriel";
    return view(
        'welcome', [
            "nome" => $nome
        ]);
});

Route::get('/options', function () {
    $nome = ["Gabriel", "MARCOOO", "Maria", "Manuela"];
    $arr = [1,2,3,4,5];
    return view('options', ["nome" => $nome,"arr" => $arr]);
});