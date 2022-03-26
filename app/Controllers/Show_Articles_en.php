<?php

namespace App\Controllers;

class Show_Articles_en extends BaseController
{
    public function index()
    {
        return view('index',[
            "page"=>"Show_Articles/index",
            "lang"=>"en" 
        ]);
    }
}
