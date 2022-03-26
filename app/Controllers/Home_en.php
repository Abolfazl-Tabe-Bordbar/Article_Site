<?php

namespace App\Controllers;

class Home_en extends BaseController
{
    public function index()
    {
        return view('index',[
            "page"=>"Home/index",
            "lang"=>"en" 
        ]);
    }
}
