<?php

namespace App\Controllers;

class Contact_us extends BaseController
{
    public function index()
    {
        return view('index',[
            "page"=>"Contact_us/index",
            "lang"=>"fa" 
        ]);
    }
}
