@extends('frontend.layout')

@section('title', 'Home')

@section('content')


<section class="bg-white ps-142 py-16 px-8">
    <h2 class="text-blue-700 hover:text-blue-900 text-3xl font-bold mb-2">About</h2>
    <div class="border-t w-18 border-2 mb-4 text-blue-800"></div>
    <span class="text-gray-800 block mb-8 text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident temporibus quaerat quod odio facilis voluptatum quibusdam molestias cupiditate iure architecto soluta consectetur impedit repellendus veritatis laboriosam.</span>
    
    <div id="#about" class="flex gap-8">
        <div>
            <img src="{{ asset($about->avatar->image)}}" class="h-74 w-auto rounded shadow" alt="">
        </div>
        <div class="flex-1">
            <div class="mb-6">
                <h3 class="text-2xl font-semibold text-gray-900 mb-4">{{ $about->subtitle }}</h3>
            </div>
            <div class="flex gap-x-36 mb-6 text-xl">
                <div>
                    <p class="text-gray-700 mb-2">
                        <span class="font-medium text-black">Birthday :</span> {{ $about->birthdate}}
                    </p>
                    <p class="text-gray-700 mb-2">
                        <span class="font-medium text-black">Website:</span> {{$about->website}}
                    </p>
                    <p class="text-gray-700 mb-2">
                        <span class="font-medium text-black">Phone:</span> {{ $about->phone}}
                    </p>
                    <p class="text-gray-700 mb-2">
                        <span class="font-medium text-black">City:</span> {{ $about->city}}
                    </p>
                </div>
                <div>
                    <p class="text-gray-700 mb-2">
                        <span class="font-medium text-black">Age:</span> {{$about->age}}
                    </p>
                    <p class="text-gray-700 mb-2">
                        <span class="font-medium text-black">Degree:</span> {{ $about->degree}}
                    </p>
                    <p class="text-gray-700 mb-2">
                        <span class="font-medium text-black">PhEmail:</span> {{ $about->email}}
                    </p>
                    <p class="text-gray-700 mb-2">
                        <span class="font-medium text-black">Freelance:</span> {{ $about->freelance }}
                    </p>
                </div>
            </div>
            <div>
                <p class="text-gray-800 text-xl">{{ $about->subtext }}</p>
            </div>
        </div>
    </div>
</section>

@endsection