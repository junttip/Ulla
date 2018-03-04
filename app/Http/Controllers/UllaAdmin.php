<?php

namespace App\Http\Controllers;

use App\Greeting;

use Illuminate\Http\Request;

class UllaAdmin extends Controller
{
var $sayGreeting;

public function  __construct(){
    $this->sayGreeting = Greeting::all(array('Greeting_name'));

}

    public function index() {
        return view('page', array('sayGreeting' => $this->sayGreeting));
    }
}
