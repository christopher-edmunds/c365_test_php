<?php

namespace App\Http\Controllers;

use App\Http\Requests\AgeRequest;
use App\Http\Library\AgeCalculator;

class AgeController extends Controller
{

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
        //
        $AgeCalculator = new AgeCalculator();
        $AgeCalculator->calculateAge($request->input('date_of_birth'));
        
    }
    
}
