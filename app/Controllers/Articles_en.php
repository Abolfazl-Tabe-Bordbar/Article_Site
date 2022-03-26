<?php

namespace App\Controllers;

class Articles_en extends BaseController
{
    public function index()
    {
        return view('index',[
            "page"=>"Articles/index",
            "lang"=>"en" 
        ]);
    }
}
