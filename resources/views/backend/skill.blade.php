@extends('backend.layout')


@section('content')
    <section class="px-100 mt-24" id="">
        <h2 class="text-2xl flex justify-center mb-24">Ajoutez un skill ici:</h2>
        <form id="skillForm" action="/create_skill" method="POST">
              @csrf
              <div class="mb-3 flex flex-col w-72 gap-y-8 mx-auto">
                <label for="skills" class="form-label font-semibold text-center">Skill:</label>
                <input type="text" class="form-control bg-white rounded-2xl ps-2 text-red-500 font-bold" name='skill' required>
                <label for="pourcentage" class="form-label font-semibold text-center">Taux de connaissance:</label>
                <input type="range" min="0" max="100" value="50" class="range" name="pourcentage" id="pourcentage" />
            </form>
            <button type="submit" form="skillForm" class="bg-green-700 px-12 text-white cursor-pointer rounded-2xl">Ajouter un skill</button>
    </section>
        <section class="bg-transparent ps-142 pe-54 py-16 px-8 h-[500px]">
        <h2 class="text-blue-700 hover:text-blue-900 text-3xl font-bold mb-2">Skills</h2>
        <div class="border-t w-13 border-2 mb-4 text-blue-800"></div>
        <span class="text-gray-800 block mb-8 text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam
            laboriosam quisquam doloremque facilis voluptates distinctio reprehenderit voluptate rerum hic maxime! Quia
            distinctio nihil minima id, nam deleniti.</span>
            <div class="grid grid-cols-2 gap-6">
                @foreach ($skills as $skill)
                    <div class="w-111">
                        <span>
                            <div class="flex justify-between">
                                <p class="font-semibold">{{ $skill->skill }}</p>
                                <p class="font-semibold">{{ $skill->pourcentage }}%</p>
                            </div>
                            <progress value="{{ $skill->pourcentage }}" max="100" class="w-112 h-3 rounded-lg overflow-hidden "></progress>
                        </span>
                        <form action="{{ route('remove_skill', $skill->id) }}" method="POST">
                            @csrf
                            @method('DELETE') 
                            <input class="border-2 border-red-500 bg-amber-50 rounded-xl px-3" type="submit" value="Supprimer">
                        </form>
                    </div>
                @endforeach
            </div>
    </section>

@endsection