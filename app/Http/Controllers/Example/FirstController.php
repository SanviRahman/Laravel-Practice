<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }

    public function country()
    {
        return view('country');
    }

    public function student(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required | max:50',
            'email' => 'required | max:80',
            'password' => 'required | min:6 | max:16'
        ]);

        dd($request->all());
    }
}
