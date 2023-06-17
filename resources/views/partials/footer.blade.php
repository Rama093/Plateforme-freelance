<footer class="bg-sky-800 ">

    <div class="py-3  h-56 ">

        <div class="grid grid-cols-2 ">
            <div class="px-20 py-4 text-white">
                <p>
                    Freelance'sn
                </p>
            </div>

            <!-- socials links -->
            <div class="inline-flex m-4 ">
                <!-- facebook -->
                <svg class="w-6 h-6  text-white hover:text-blue-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                </svg>
                <!-- Twitter -->
                <svg class="w-6 h-6 ml-4 text-white hover:text-sky-400 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                </svg>
                <!-- linkedin -->
                <svg class="w-6 h-6 ml-4 text-white hover:text-blue-500 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path>
                </svg>
            </div>

        </div>
        <hr>
        <div class="grid grid-cols-3 ">

            <div class="px-14 text-gray-300 py-4 ">
                Freelance'sn est une plateforme de marché<br> pour freelances informatiques qui met en <br>relation des
                personnes qui cherchent à <br>faire appel à des prestataires
                indépendants <br>pour des travaux informatique, etc. avec des freelances qui proposent leurs services.
            </div>
            <div class=" text-center">
                <p class="text-white mt-2"><b>À propos</b></p>
                <p><a href="#" class="text-gray-300 text-sm ml-2 hover:text-sky-400">Contact</a></p>
                <p><a href="#" class="text-gray-300 text-sm ml-2  hover:text-sky-400">Comment ça marche?</a></p>
            </div>
            <div class="">
                <p class="text-white mt-2"><b>Mon Compte</b></p>
                @guest
                <p class="text-white mt-2">
                    <a href="{{ route('login') }}" class="m-5 hover:text-lg hover:text-sky-500  hover:underline decoration-blue-500">Connexion</a>
                </p>
                <p class="text-white mt-2">
                    <a href="{{ route('register') }}" class="m-5 hover:text-lg hover:text-sky-500  hover:underline decoration-blue-500">Inscription</a>
                </p>
                @else
                <p class="text-white mt-2">
                    <a href="{{ route('logout') }}" class="m-5 hover:text-lg hover:text-sky-500  hover:underline decoration-blue-500" onclick="event.preventDefault(); 
                     document.getElementById('logout-form').submit();">Déconnexion</a>
                <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display:none;">
                    @csrf
                </form>
                </p>
                @endguest

            </div>

        </div>
    </div>

    <hr class=" mt-12">
    <div class="text-white text-center py-3">
        <p>&copy; <b>Freelance'sn.</b> Tous droits réservés.</p>
    </div>
</footer>