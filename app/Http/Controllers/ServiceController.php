<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller

    {
    public function index(){
        $services=Service::all();
        return view('frontend.services',compact('services'));
    }
    public function indexback(){
        $services=Service::all();
        return view('backend.services',compact('services'));
    }

    public function create(){
        return view('create');
    }
    public function store(Request $request){
      
        $services = new Service(); 
        $services->icon = $request->icon;
        $services->title = $request->title;
        $services->text = $request->text;


        $services->save(); 
        $services = Service::all();
        return view('backend.services',compact('services'));
    }

    public function destroy($id){
        $services = Service::where("id", $id);
        $services->delete();

        $services = Service::all(); 
        return view('backend.services', compact('services'));
    }

}
