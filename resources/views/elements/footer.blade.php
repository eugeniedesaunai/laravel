
    <!-- Newsletter -->
    <section>
        <div class="max-w-7xl mx-auto px-4 pb-12 sm:px-6 lg:pb-16 lg:px-8">
            <div class="px-6 py-6 bg-indigo-700 rounded-lg md:py-12 md:px-12 lg:py-16 lg:px-16 xl:flex xl:items-center">
                <div class="xl:w-0 xl:flex-1">
                    <h2 class="text-2xl font-extrabold tracking-tight text-white sm:text-3xl">Vous voulez connaître nos actus?</h2>
                    <p class="mt-3 max-w-3xl text-lg leading-6 text-indigo-200">Inscrivez-vous à notre super newsletter !</p>
                </div>
                <div class="mt-8 sm:w-full sm:max-w-md xl:mt-0 xl:ml-8">
                    <form method="POST" action="/newsletter" class="sm:flex" novalidate>
                        @csrf
                        <label for="mail" class="sr-only">Adresse e-mail</label>
                        <input id="mail" value="" name="mail" type="email" class="w-full border-white px-5 py-3 placeholder-gray-500 focus:ring-offset-indigo-700 focus:ring-white focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-md" placeholder="Entrez votre adresse e-mail">
                        <button type="submit" class="mt-3 w-full flex items-center justify-center px-5 py-3 border border-transparent shadow text-base font-medium rounded-md text-white bg-indigo-500 hover:bg-indigo-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-indigo-700 focus:ring-white sm:mt-0 sm:ml-3 sm:w-auto sm:flex-shrink-0">M'abonner</button>
                        {{-- affiche un message d'erreur si le validate du controller ne passe pas --}}
                        @error('mail')
                        <span class="text-red-500" style="position: absolute; bottom:0%;">{{ $message }}</span>
                        @enderror
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>