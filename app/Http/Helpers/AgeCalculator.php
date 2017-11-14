<?php
namespace App\Http\Helpers;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class AgeCalculator {
    
    private $year;
    private $days;
    private $hours;
    
    
    
    public function calculateAge($date_of_birth) {
    //I've chosen to do this on the function level rather than in the constructor in case the object needs to be reused.     
    $today = date("d-m-Y H:i");
    
    
    $diff = date_diff(date_create($date_of_birth), date_create($today));
    echo 'Age is '.$diff->format('%y')." Years ".$diff->format('%d')." days ".$diff->format('%H')." hours";

    }
}

