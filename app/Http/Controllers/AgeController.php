<?php

namespace App\Http\Controllers;

use App\Http\Requests\AgeRequest;
use App\Http\Library\AgeCalculator;
use App\User;

class AgeController extends Controller {

    private $AgeCalculator;
    
    /**
     * class constructor to add the age calculator to be used by all functions
     */
    public function __construct() {
       
        //Instantiate a new age calulator
        $this->AgeCalculator = new AgeCalculator();
    }

    /**
     * Show the form.
     *
     * @return view
     */
    public function index()
    {
        //Pull in all user objects sorted by date of birth
        $users = User::orderBy('date_of_birth','desc')->get();

        $age_message = session("age_message");
        return view('home', ["age_message"=>$age_message, 'users'=>$users, 'age_calculator' =>$this->AgeCalculator]);
    }
    
    /**
     * Calculate the age.
     *
     * @return view
     */
    public function calculate(AgeRequest $request)
    {
        //Assign variables
        $name = $request->input('name');
        $date_of_birth = $request->input('date_of_birth');
        
        //Instantiate a new user object
        $User = new User();
        //Store the new user
        $User->storeUser(compact('name','date_of_birth'));
        
        $request->session()->flash('age_message', "You are ".$this->AgeCalculator->calculateAge($request->input('date_of_birth')));
        
        return redirect("/");
    }
    
}
