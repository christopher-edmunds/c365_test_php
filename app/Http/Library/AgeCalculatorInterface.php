<?php
namespace App\Http\Library;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
interface AgeCalculatorInterface {
    
    public function getYears();
    public function getDays();
    public function getHours();
}
