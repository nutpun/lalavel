<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function calculator($num1,$num2){
        
        return ($num1+$num2);
    }
   
}
