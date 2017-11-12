<?php

namespace App\Http\Controllers;

use App\Http\Requests\AgeRequest;


use Session;

class AgeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the form.
     *
     * @return view
     */
    public function index()
    {

        return view('home');
    }
    
    /**
     * Calculate the age.
     *
     * @return view
     */
    public function calculate(AgeRequest $request)
    {

        var_dump($request->all());
    }
    
}
