@extends('backend.layout')
@section('content')


<section class="px-100 py-40 ">
    <h2 class="text-2xl font-semibold">
        Ajouter une photo au portfolio :
    </h2>

    <form class="space-y-6" action="{{ route('storephoto') }}" method="POST" enctype="multipart/form-data">
    @csrf
    

    <div class="group">
        <label for="image" class="block text-sm font-medium text-gray-700 mb-2">Image</label>
        <input type="file" id="image" name="image" accept="image/*" required
            class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 group-hover:border-gray-300 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-blue-50 file:text-red-400 hover:file:bg-blue-100">
    </div>
    <div>
        <label for="filter" class="block text-sm font-medium text-gray-700 mb-2">Type</label>
        <select name="filter" id="">
            <option value="">Choisissez un poste</option>
            <option value="app">App</option>
            <option value="books">Books</option>
            <option value="branding">Branding</option>
            <option value="product">Product</option>
        </select>
    </div>
    <button type="submit" class="w-full bg-gradient-to-l from-gray-200 to-orange-500 text-white py-3 px-4 rounded-lg hover:bg-blue-700 transition-colors cursor-pointer">
        Envoyer
    </button>
</form>
</section>
<section id="portfolio" class="bg-transparent ps-142 py-16 pe-54 px-8 mb-16">

         <h2 class="text-blue-700 hover:text-blue-900 text-3xl font-bold mb-2">Portfolio</h2>
          <div class="border-t w-18 border-2 mb-4 text-blue-800"></div>

          <div class="mb-12 font-semibold mt-6">
            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem earum velit tempore vitae ad eveniet eius quas quos saepe, culpa nulla voluptatem vero, beatae excepturi. Dolor fugit aut, repellendus ab similique voluptatibus voluptas numquam a pariatur adipisci. Id, quis rerum.</span>
          </div>

            <div class="bg-transparent w-auto h-auto flex flex-wrap gap-x-10 gap-y-10">
                @foreach ($portfolio as $photo )
                    <img class="w-82" src="{{ $photo->image }}" alt="">
                <form action="{{ route('remove_photos', $photo->id) }}" method="POST">
                    @csrf
                    @method('DELETE') 
                    <input class="border-2 border-red-500 bg-amber-50 rounded-xl px-3" type="submit" value="Supprimer">
                </form>
                @endforeach
            </div>
            
</section>


@endsection