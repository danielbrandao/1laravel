<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

public function __construct(){
    $this->middleware('guest');
}

public function index(){
    return view('welcome');
}

public function exemplo(){
    return "Bem-vindo";
}

/*class WelcomeController extends Controller
{
    //
}
*/