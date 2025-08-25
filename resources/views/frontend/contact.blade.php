
<section id="contact" class="bg-gray-50 ps-142 py-16 pe-54 px-8">
<h2 class="text-blue-700 hover:text-blue-900 text-3xl font-bold mb-2">Contact</h2>
          <div class="border-t w-16 border-2 mb-4 text-blue-800"></div>

           <div class="max-w-6xl mx-auto">
            <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">
            <div class="grid grid-cols-1 lg:grid-cols-2">
                <!-- Section Contact Info -->
                <div class="bg-gradient-to-br from-white to-gray-50 p-8 lg:p-12 text-white">
                    <h2 class="text-3xl lg:text-4xl text-black font-bold mb-6">Contact</h2>
                    <p class="text-blue-300 mb-10">
                        Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate.
                    </p>
                    
                    <!-- Informations de contact -->
                    <div class="space-y-4">
                        <div class="flex items-start space-x-2">
                            <div>
                                <h3 class="font-semibold text-lg mb-1 text-black">Location:</h3>
                                <p class="text-blue-300">place de la minoterie 10,1080 Bruxelles</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-2">
                            <div>
                                <h3 class="font-semibold text-lg mb-1 text-black">Email:</h3>
                                <p class="text-blue-300">info@mekengeet.com</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-2">
                            <div>
                                <h3 class="font-semibold text-lg mb-1 text-black">Call:</h3>
                                <p class="text-blue-300">+32 486 68 54 21</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Carte stylisée -->
                    <div class="mt-10 bg-white/10 rounded-lg p-4 backdrop-blur-sm">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2519.2567891234567!2d4.3517!3d50.8503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c47c4a1a1a1a%3A0x1a1a1a1a1a1a1a1a!2sPlace%20de%20la%20Minoterie%2C%201080%20Molenbeek-Saint-Jean%2C%20Belgium!5e0!3m2!1sen!2sus!4v1234567890"
                            width="100%" 
                            height="250" 
                            style="border:0; border-radius: 8px;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade"
                            class="rounded-lg">
                        </iframe>
                    </div>
                </div>
                
                <!-- Section Formulaire -->
                <div class="p-8 lg:p-12">
                    <form class="space-y-6" action="{{ route('storemail') }}" method="POST">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="group">
                                <label for="nom" class="block text-sm font-medium text-gray-700 mb-2">Your Name</label>
                                <input type="text" id="nom" name="nom" placeholder="Votre nom" required
                                    class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 group-hover:border-gray-300">
                            </div>
                            
                            <div class="group">
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Your Email</label>
                                <input type="email" id="email" name="email" placeholder="votre@email.com" required
                                    class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 group-hover:border-gray-300">
                            </div>
                        </div>
                        
                        <!-- Sujet -->
                        <div class="group">
                            <label for="sujet" class="block text-sm font-medium text-gray-700 mb-2">Subject</label>
                            <input type="text" id="sujet" name="sujet" placeholder="Objet de votre message" required
                                class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 group-hover:border-gray-300">
                        </div>
                        
                        <!-- Message -->
                        <div class="group">
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                            <textarea id="message" name="message" rows="6" required
                                class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 group-hover:border-gray-300 resize-none"
                                ></textarea>
                        </div>
                        
                        <!-- Bouton Submit -->
                        <div class="pt-4">
                            <button type="submit" 
                                class="w-full bg-gradient-to-r from-blue-300 text-white font-semibold py-4 px-6 rounded-lg hover:from-blue-700 transform hover:scale-[1.02] transition-all duration-200 shadow-lg hover:shadow-xl focus:ring-4 focus:ring-blue-500/25">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
            </div>


</section>