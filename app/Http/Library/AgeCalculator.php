<?php
namespace App\Http\Library;
use App\Http\Library\AgeCalculatorInterface;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class AgeCalculator implements AgeCalculatorInterface {
    
    private $year;
    private $days;
    private $hours;
    
    
    
    public function calculateAge($date_of_birth) {
    //I've chosen to do this on the function level rather than in the constructor in case the object needs to be reused.
        //Get todays date

    $today = date("d-m-Y H:i");
    //Calculate the difference between date of birth and now 
    $diff = date_diff(date_create($date_of_birth), date_create($today));
    
    //Store in class level variables
    $this->years = $diff->format('%y');
    $this->days = $diff->format('%d');
    $this->hours = $diff->format('%H');
    
    return $this->getAge();
    
    }
    
    //Return number of years
    public function getYears() {
        return $this->years;
    }
    
    
    public function getDays() {
        return $this->days;
    }
    
    public function getHours() {
        return $this->hours;
    }
    
    private function getAge() {
        return $this->getYears()." years, ".$this->getDays()." days, ".$this->getHours()." hours old";
    }
    
    
}

