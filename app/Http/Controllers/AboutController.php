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
}
