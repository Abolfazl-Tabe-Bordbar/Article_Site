<?php

namespace App\Controllers;

class Articles extends BaseController
{
    public function index()
    {
        return view('index',[
            "page"=>"Articles/index",
            "lang"=>"fa" 
        ]);
    }
}
