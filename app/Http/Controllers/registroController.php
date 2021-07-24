<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registroController extends Controller
{
    //
    public function  __invoke()
    {
        return view("registro");
    }
}
