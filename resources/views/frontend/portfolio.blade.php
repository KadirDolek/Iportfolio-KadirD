<section id="portfolio" class="bg-white ps-142 py-16 pe-54 px-8 mb-16">

         <h2 class="text-blue-700 hover:text-blue-900 text-3xl font-bold mb-2">Portfolio</h2>
          <div class="border-t w-18 border-2 mb-4 text-blue-800"></div>

          <div class="mb-12 font-semibold mt-6">
            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem earum velit tempore vitae ad eveniet eius quas quos saepe, culpa nulla voluptatem vero, beatae excepturi. Dolor fugit aut, repellendus ab similique voluptatibus voluptas numquam a pariatur adipisci. Id, quis rerum.</span>
          </div>

            <div class="bg-white w-auto h-190 flex flex-wrap gap-x-12 gap-y-10">
                @foreach ($portfolio as $photo )
                    <img class="w-82" src="{{ $photo->image }}" alt="">
                @endforeach
            </div>
            
</section>