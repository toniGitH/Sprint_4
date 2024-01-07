<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){ /*El método __invoke SÓLO se usa si el controllador va a administrar una sola ruta*/
        return view("home");
    }
}
