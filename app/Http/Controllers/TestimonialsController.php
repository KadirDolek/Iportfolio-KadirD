<?php

namespace App\Http\Controllers;

use App\Models\Testimonials;
use Illuminate\Http\Request;


class TestimonialsController extends Controller
{
    public function index(){
        $testimonials = Testimonials::all();
        return view('backend.testimonial', compact('testimonials'));
    }

    public function create(){
        return view('backend.testimonial');
    }

    public function store(Request $request){
        

        
        $path = $request->file('image')->store('testimonial-assets', 'public');

        
        Testimonials::create([
            'comment' => $request->comment,
            'image' => 'storage/' . $path,
            'name' => $request->name,
            'position' => $request->position,
        ]);

        return redirect()->route('testimonials.index');
    }

    public function edit($id){
        $testimonials = Testimonials::findOrFail($id);
        return view('backend.testimonial', compact('testimonials'));
    }

    public function update(Request $request, $id){
        $testimonials = Testimonials::findOrFail($id);

        
        $data = [
            'comment' => $request->comment,
            'name' => $request->name,
            'position' => $request->position,
        ];


        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('testimonial-assets', 'public');
            $data['image'] = 'storage/' . $path;
        }

        $testimonials->update($data);

        return redirect()->route('testimonials.index');
    }

    public function destroy($id){
        $testimonials = Testimonials::findOrFail($id);
        $testimonials->delete();
        return redirect()->route('testimonials.index');
    }
}
