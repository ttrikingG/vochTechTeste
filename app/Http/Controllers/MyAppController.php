<?php

namespace App\Http\Controllers;

class MyAppController extends Controller
{
    public function index(){
        return view('myApp', [
            'title' => 'myApp'
        ]);
    }
}