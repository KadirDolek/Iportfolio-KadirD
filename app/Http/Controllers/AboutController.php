<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Skill;
use Illuminate\Http\Request;



class AboutController extends Controller
{
    public function index(){
        $about = About::first();
        $skills = Skill::all();
        return view('frontend.about', compact('about','skills'));
    }
    public function indexskill(){
        $skills = Skill::all();
        return view('backend.skill', compact('skills'));
    }
    public function create(){
         return view('create');        
    }
    public function store(Request $request){

        $skills = new Skill(); 
        $skills->skill = $request->skill;
        $skills->pourcentage = $request->pourcentage;


        $skills->save(); 
        $skills = Skill::all();
        return view('backend.skill', compact('skills'));
    }
}
