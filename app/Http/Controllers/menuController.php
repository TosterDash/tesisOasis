<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class menuController extends Controller
{
    //
    public function __invoke(){
        return view("menu");
    }
}
