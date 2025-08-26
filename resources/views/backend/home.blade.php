@extends('backend.layout')


    <section id="about" class="bg-white ps-142 py-16 pe-54 px-8">
        <h2 class="text-blue-700 hover:text-blue-900 text-3xl font-bold mb-2">About</h2>
        <div class="border-t w-18 border-2 mb-4 text-blue-800"></div>
        <span class="text-gray-800 block mb-8 text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident
            temporibus quaerat quod odio facilis voluptatum quibusdam molestias cupiditate iure architecto soluta
            consectetur impedit repellendus veritatis laboriosam.</span>

        <form id="addEmployeForm" action="{{ route('update_profil', $about->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
          @method("PUT")
            <div>
                <img src="{{ asset($about->avatar->image)}}" class="h-74 w-auto rounded shadow" alt="">
                <label for="image" class="block text-sm font-medium text-gray-700 mb-2">Profil</label>
                <input type="file" id="image" name="avatar" accept="image/*"
            class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 group-hover:border-gray-300 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-blue-50 file:text-red-400 hover:file:bg-blue-100">
            </div>
            <div class="flex-1">
                <div>
            <label for="subtitle" class="block font-semibold mb-2">Description</label>
            <input id="subtitle" type="text" class="form-control border-2 w-full p-2 rounded" value="{{ old('subtitle', $about->subtitle) }}" name='subtitle' required>
        </div>
               <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-6 text-xl">
    <div class="space-y-6">
        <div>
            <label for="birthdate" class="block font-semibold mb-2">Année de naissance</label>
            <input id="birthdate" type="text" class="form-control border-2 w-full p-2 rounded" value="{{ old('birthdate', $about->birthdate) }}" name='birthdate' required>
        </div>
        <div>
            <label for="website" class="block font-semibold mb-2">Website</label>
            <input id="website" type="text" class="form-control border-2 w-full p-2 rounded" value="{{ old('website', $about->website) }}" name='website' required>
        </div>
        <div>
            <label for="phone" class="block font-semibold mb-2">Phone</label>
            <input id="phone" type="text" class="form-control border-2 w-full p-2 rounded" value="{{ old('phone', $about->phone) }}" name='phone' required>
        </div>
        <div>
            <label for="city" class="block font-semibold mb-2">City</label>
            <input id="city" type="text" class="form-control border-2 w-full p-2 rounded" value="{{ old('city', $about->city) }}" name='city' required>
        </div>
    </div>
    
    <div class="space-y-6">
        <div>
            <label for="age" class="block font-semibold mb-2">Age</label>
            <input id="age" type="number" class="form-control border-2 w-full p-2 rounded" value="{{ old('age', $about->age) }}" name='age' required>
        </div>
        <div>
            <label for="degree" class="block font-semibold mb-2">Degree</label>
            <input id="degree" type="text" class="form-control border-2 w-full p-2 rounded" value="{{ old('degree', $about->degree) }}" name='degree' required>
        </div>
        <div>
            <label for="email" class="block font-semibold mb-2">Email</label>
            <input id="email" type="email" class="form-control border-2 w-full p-2 rounded" value="{{ old('email', $about->email) }}" name='email' required>
        </div>
        <div>
            <label for="freelance" class="block font-semibold mb-2">Freelance</label>
            <input id="freelance" type="text" class="form-control border-2 w-full p-2 rounded" value="{{ old('freelance', $about->freelance) }}" name='freelance' required>
        </div>
    </div>
</div>
                <div>
                    <p class="text-gray-800 text-xl">{{ $about->subtext }}</p>
                </div>
            </div>
            <button class="btn btn-primary border-2 border-fuchsia-600 rounded-xl bg-green-500 font-semibold px-4 mt-6" type="submit">Confirmer la modification</button>
        </form>
    </section>