<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;


class PortfolioController extends Controller

    {
    public function index(){
        $portfolio=Portfolio::all();
        return view('frontend.portfolio', compact('portfolio'));    
    }
    
}
