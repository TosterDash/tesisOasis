<?php

namespace App\Http\Controllers;

use App\Models\menu;
use Illuminate\Http\Request;

class menuController extends Controller
{
    //
    public function __invoke(){
        $menu = menu::all();
        return view("menu",compact("menu"));
    }
}
