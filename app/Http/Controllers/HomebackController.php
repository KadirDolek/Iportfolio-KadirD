<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomebackController extends Controller
{
    public function index(){
        return view('backend.home');
    }
}
