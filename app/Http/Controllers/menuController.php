<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class menuController extends Controller
{
    //
    public function __invoke(){
        return view("menu");
        
    }
}
