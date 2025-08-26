@extends('backend.layout')
@section('content')


<section class="px-100 py-40 ">
<h2 class="font-semibold flex justify-center">Services Settings</h2>

<form class="space-y-6 mb-12 flex justify-center" action="{{ route('storeservice') }}" method="POST">
    @csrf
    <div class=" w-128">
        <div class="group">
            <label for="icon" class="block text-sm font-medium text-gray-700 mb-5 flex justify-center  mt-4">Met ton logo</label>
            <input type="text" id="icon" name="icon" placeholder="Icon en emoji" required
            class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 
            focus:border-transparent transition-all bg-white duration-200 group-hover:border-gray-300">
        </div>
        <div class="group">
            <label for="title" class="block text-sm font-medium text-gray-700 mb-5 flex justify-center mt-4">Titre</label>
            <input type="text" id="title" name="title" placeholder="Mettez le titre du nouveau service" required
                class="w-full px-4 py-3 border bg-white border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 
                focus:border-transparent transition-all duration-200 group-hover:border-gray-300">
        </div>
        <div class="group">
            <label for="text" class="block text-sm font-medium text-gray-700 mb-5 flex justify-center mt-4">Description</label>
            <input type="text" id="text" name="text" placeholder="Mettez la description du service" required
                class="w-full h-32 px-4 py-3 border bg-white border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 
                focus:border-transparent transition-all duration-200 group-hover:border-gray-300">
        </div>
        <div class="pt-4">
            <button type="submit" 
                class="w-full bg-gradient-to-r from-orange-600 to-red-800 text-white font-semibold py-4 px-6 rounded-lg hover:from-blue-700 transform hover:scale-[1.02] transition-all duration-200 shadow-lg hover:shadow-xl focus:ring-4 focus:ring-blue-500/25">
                Envoie
            </button>
        </div>
    </div>
    
</form>


<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
         @foreach ($services as $serv )
            <div class="flex items-start space-x-4">
                <div class="flex-shrink-0">
                    <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center">
                        {{$serv ->icon}}
                    </div>
                </div>
                <div class="flex-1">
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">{{ $serv->title }}</h3>
                    <p class="text-gray-600 leading-relaxed">
                       {{ $serv->text}}
                    </p>
                </div>
                <form action="{{ route('remove_services', $serv->id) }}" method="POST">
                    @csrf
                    @method('DELETE') 
                    <input class="border-2 border-red-500 bg-amber-50 rounded-xl px-3" type="submit" value="Supprimer">
                </form>
            </div>
            @endforeach
          </div>
</section>


@endsection