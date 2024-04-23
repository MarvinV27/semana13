<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Carroscontroller extends Controller
{
    public function index()
    {
        return view('carros.index');
    }
}
