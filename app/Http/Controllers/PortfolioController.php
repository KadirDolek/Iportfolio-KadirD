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
    public function indexback(){
        $portfolio=Portfolio::all();
        return view('backend.portfolio', compact('portfolio'));    
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $path = $request->file('image')->store('portfolio-assets','public');
        Portfolio::create([
            'image' => 'storage/'.$path,
            'filter' => $request->filter
        ]);
        $portfolio = Portfolio::all();
    return view('backend.portfolio', compact('portfolio'));
    }

    public function destroy($id){
        $portfolio = Portfolio::where("id", $id);
        $portfolio->delete();

        $portfolio = Portfolio::all(); 
        return view('backend.portfolio', compact('portfolio'));
    }
    
}
