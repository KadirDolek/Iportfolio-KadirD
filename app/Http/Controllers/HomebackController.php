<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use App\Models\About;


class HomebackController extends Controller
{
    public function index(){
        $about = About::first();
        $portfolio= Portfolio::all();
        return view('backend.home', compact('about', 'portfolio'));
    }

    public function edit ($id){
        $about = About::where('id',$id)->first();
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
            $avatar = Avatar::where('about_id', $about->id)->first();
            if ($avatar) {
                $avatar->update([
                    'image' => 'storage/' . $path
                ]);
            } 
        }
        return redirect('/');
    }

    
}
