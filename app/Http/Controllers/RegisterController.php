<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{ 
    //
    public function register($id)
    {
        $name = 'Laravel';
        $version = '10.0';

        return view('welcome', compact('name', 'version', 'id'));
    }
}
