@extends('backend.layout')

@section('title', 'Testimonials')

@section('content')

<section class="px-100 py-40">
    <h2>Testimonials</h2>
    
    <!-- Formulaire de création stylisé -->
    <div class="max-w-2xl mx-auto mb-12">
        <h1 class="text-2xl font-bold text-center mb-8 text-gray-800">Ajouter un Testimonial</h1>

        <form action="{{ route('testimonials.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-8 rounded-xl shadow-lg border border-gray-100">
            @csrf

            <div class="mb-6">
                <label for="comment" class="block text-sm font-semibold text-gray-700 mb-3">Commentaire</label>
                <textarea id="comment" name="comment" rows="4" placeholder="Écrivez le commentaire du client ici..." required
                         class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 resize-vertical bg-gray-50 hover:bg-white"></textarea>
            </div>

            <div class="mb-6">
                <label for="img" class="block text-sm font-semibold text-gray-700 mb-3">Photo du client</label>
                <input id="img" type="file" name="img" accept="image/*" required
                       class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 bg-gray-50 hover:bg-white file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-blue-50 file:text-blue-600 hover:file:bg-blue-100">
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="name" class="block text-sm font-semibold text-gray-700 mb-3">Nom du client</label>
                    <input id="name" type="text" name="name"  required
                           class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 bg-gray-50 hover:bg-white">
                </div>

                <div>
                    <label for="positions" class="block text-sm font-semibold text-gray-700 mb-3">Poste/Fonction</label>
                    <input id="positions" type="text" name="positions" required
                           class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 bg-gray-50 hover:bg-white">
                </div>
            </div>

            <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-blue-700 text-white font-semibold py-4 px-6 rounded-lg hover:from-blue-700 hover:to-blue-800 transform hover:scale-[1.02] transition-all duration-200 shadow-lg hover:shadow-xl focus:ring-4 focus:ring-blue-500/25">
                Ajouter le témoignage
            </button>
        </form>
    </div>

    <!-- Liste des témoignages -->
    <div class="mt-8">
        <h2 class="text-xl font-semibold mb-4">Témoignages existants</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($testimonials as $testimonial)
                <div class="bg-white p-4 rounded-lg shadow">
                    <div class="flex items-center mb-3">
                        @if(isset($testimonial->image))
                            <img src="{{ asset($testimonial->image) }}" alt="{{ $testimonial->name }}" class="w-12 h-12 rounded-full mr-3">
                        @endif
                        <div>
                            <h3 class="font-semibold">{{ $testimonial->name }}</h3>
                            <p class="text-sm text-gray-600">{{ $testimonial->positions }}</p>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-3">{{ $testimonial->comment }}</p>
                    
                    <div class="flex gap-2">
                        <a href="{{ route('testimonials.edit', $testimonial->id) }}" 
                           class="bg-blue-500 text-white px-3 py-1 rounded text-sm hover:bg-blue-600 transition-colors">
                            Modifier
                        </a>
                        
                        <form action="{{ route('testimonials.destroy', $testimonial->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded text-sm hover:bg-red-600 transition-colors"
                                    onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce témoignage?')">
                                Supprimer
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>



@endsection