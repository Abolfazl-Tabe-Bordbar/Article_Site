<?php

namespace App\Controllers;

class Our_team extends BaseController
{
    public function index()
    {
        return view('index',[
            "page"=>"Our_team/index",
            "lang"=>"fa" 
        ]);
    }
}
