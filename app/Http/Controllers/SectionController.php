<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // Handle the request here
        return ('
            <h1>SectionController</h1>
            <p>This is the SectionController</p>
            <p>SectionController is a controller that handles the section of the application.</p>
            <p>It is used to handle the section of the application.</p>
            <p>It is used to handle the section of the application.</p>
            <p>It is used to handle the section of the application.</p>
            <p>It is used to handle the section of the application.</p>');
    }
}
