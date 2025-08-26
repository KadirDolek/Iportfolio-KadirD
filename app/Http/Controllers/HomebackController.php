<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use App\Models\About;

class HomebackController extends Controller
{
    public function index(){
        $about = About::first();
        return view('backend.home', compact('about'));
    }
     public function update ($id, Request $request) {
        $about = About::findOrFail($id);
        $about->update(
            [
                "subtitle"=>$request->subtitle,
                "birthdate"=>$request->birthdate,
                "website"=>$request->website,
                "phone"=>$request->phone,
                "city"=>$request->city,
                "age"=>$request->age,
                "degree"=>$request->degree,
                "email"=>$request->email,
                "freelance"=>$request->freelance
            ]
        );
        if ($request->hasFile('avatar')) {
            $path = $request->file('avatar')->store('about-avatars', 'public');
            $portfolio = Portfolio::where('about_id', $about->id)->first();
            if ($portfolio) {
                $portfolio->update([
                    'image' => 'storage/' . $path
                ]);
            } 
        }
        return view("backend.home", compact('about'));
}
}
