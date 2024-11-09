<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormProcessor extends Controller
{
    //
    public function index() {
        return view('form');
    }

    public function store(Request $request) {
        $userData = ['firstname' => $request->firstname, 'lastname' => $request->lastname, 'email' => $request->email];
        
        // return response()->json($userData);
        return view('hello', ['name' => $userData['firstname']]);
    }

}
