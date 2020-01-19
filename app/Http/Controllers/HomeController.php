<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $data = [
          "banners" =>\App\Banner::all(),

        ];
        return view('home',$data);
    }
    public function about(){
        return view('about');
    }
    public function contract(){
        return view('contract');
    }
    public function help(){
        return view('help');
    }
}
