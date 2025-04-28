<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $name = 'Laravel';
        $fruits = ['apple', 'banana', 'orange', 'grape'];

        // Pass both name and fruits to the view
        return view('welcome', compact('name', 'fruits'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return ('You are calling create method');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return ('You are calling show method');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
