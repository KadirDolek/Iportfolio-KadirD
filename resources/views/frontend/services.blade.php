
<section id="services" class="bg-gray-50 ps-142 py-16 pe-54 px-8">

         <h2 class="text-blue-700 hover:text-blue-900 text-3xl font-bold mb-2">Services</h2>
          <div class="border-t w-18 border-2 mb-4 text-blue-800"></div>
            <p class="text-lg text-gray-600 max-w-4xl leading-relaxed font-semibold my-6">
                Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate.
            </p>
        

        <!-- Services Grid -->
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
            </div>
            @endforeach
          </div>
          
</section>
<section class="bg-white ps-142 py-16 pe-54 px-8">
<h2 class="text-blue-700 hover:text-blue-900 text-3xl font-bold mb-2">Ils m'ont fait confiance...</h2>
          <div class="border-t w-32 border-2 mb-4 text-blue-800"></div>


</section>