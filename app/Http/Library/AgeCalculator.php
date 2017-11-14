<?php
namespace App\Http\Library;
use App\Http\Library\AgeCalculatorInterface;

class AgeCalculator implements AgeCalculatorInterface {
    
    private $year;
    private $days;
    private $hours;
    
    
    /**
     * Calculate age
     *
     * @param  string  $dat_of_birth
     * @return string
     */
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
    
    /**
     * Return years
     *
     * @return int
     */
    public function getYears() {
        return $this->years;
    }
    
    /**
     * Return days
     *
     * @return int
     */
    public function getDays() {
        return $this->days;
    }
    
    /**
     * Return hours
     *
     * @return int
     */
    public function getHours() {
        return $this->hours;
    }
    
    /**
     * Return age
     *
     * @return string
     */
    private function getAge() {
        return $this->getYears()." years, ".$this->getDays()." days, ".$this->getHours()." hours old";
    }
    
    
}

