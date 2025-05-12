<?php

namespace App\Http\Controllers;

// use App\Models\Registration;

use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OurRegisterController extends Controller
{
    //
    public function registerStore(Request $request)
    {
        // Validate the request data
        // i want to show the data from request
        // manually validate the request data
        $validator= Validator::make($request->all(), [
            'name' => 'required|string|max:20',
            'email' => 'required|email|unique:mystudents,email|max:50',
            'phone' => 'required|string|max:16',
            'city' => 'required|string|max:20',
            'address' => 'required|string|max:255',
        ]);
// now we will check if the validation fails
        if ($validator->fails()) {
            // return response()->json($validator->errors(), 422);
            return response()->json([
                'status' => false,
                'message' => $validator->errors(),
            ], 422);
        }

        // If validation passes, you can proceed with storing the data
        // For example, you can save it to the database or perform other actions

        // return response()->json(['status' => true, 'message' => 'Data stored successfully']);

        Registration::create($request->all());
        return response()->json(['status' => true, 'message' => 'Data stored successfully']);
// return ('hello this is store file');

    }

    public function registerShow()
    {

        // $register = Registration::where('email', "hilalahmadsalarzi@gmail.com")->get();
        $register = Registration::all();

        // $data = Registration::all();
        // return response()->json($data);
        return view('front-end.pages.registration-table', compact('register'));
        // return view('front-end.pages.registration-table');
    }
}
