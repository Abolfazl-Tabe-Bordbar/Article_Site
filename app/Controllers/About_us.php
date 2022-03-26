<?php

namespace App\Controllers;

class About_us extends BaseController
{
    public function index()
    {
        return view('index',[
            "page"=>"About_us/index",
            "lang"=>"fa" 
        ]);
    }
}
