<?php

namespace App\Controllers;

class Our_team_en extends BaseController
{
    public function index()
    {
        return view('index',[
            "page"=>"Our_team/index",
            "lang"=>"en" 
        ]);
    }
}
