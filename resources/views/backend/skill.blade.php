@extends('backend.layout')


@section('content')
    <section class="px-100 mt-24" id="">
        <h2 class="text-2xl flex justify-center mb-24">Ajoutez un skill ici:</h2>
        <form id="skillForm" action="/create" method="POST">
              @csrf
              <div class="mb-3 flex flex-col w-72 gap-y-8 mx-auto">
                <label for="skills" class="form-label font-semibold text-center">Skill:</label>
                <input type="text" class="form-control bg-white rounded-2xl ps-2 text-red-500 font-bold" name='skill' required>
                <label for="pourcentage" class="form-label font-semibold text-center">Taux de connaissance:</label>
                <input type="range" min="0" max="100" value="50" class="range" name="pourcentage" id="pourcentage" />
            </form>
            <button type="submit" form="skillForm" class="bg-green-700 px-12 text-white cursor-pointer rounded-2xl">Ajouter un skill</button>
    </section>

@endsection