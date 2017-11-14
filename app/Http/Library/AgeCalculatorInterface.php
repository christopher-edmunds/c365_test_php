<?php
namespace App\Http\Library;

interface AgeCalculatorInterface {
    
    public function getYears();
    public function getDays();
    public function getHours();
    public function getAge();
}
