<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurRegisterController extends Controller
{
    //
    public function registerStore(Request $request)
    {
        // Validate the request data
        // i want to show the data from request
        dd($request->all());


// return ('hello this is store file');

    }
}
