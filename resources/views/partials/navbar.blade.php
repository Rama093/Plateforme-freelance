<header class="flex justify-between items-center py-5">
  <div>FREELANCE'sn</div>
  <nav>
    <livewire:search></livewire:search>
    <a href="{{ route('jobs.index') }}" class="m-5 hover:text-lg hover:text-sky-500 decoration-blue-500">Projets</a>
    <a href="{{ route('freelances.index') }}" class="m-5 hover:text-lg hover:text-sky-500 decoration-blue-500">Freelances</a>
    @guest
    <a href="{{ route('login') }}" class="m-5 hover:text-lg hover:text-sky-500   decoration-blue-500">Connexion</a>
    <a href="{{ route('register') }}" class="m-5 hover:text-lg hover:text-sky-500 decoration-blue-500">Inscription</a>
    @else
    <a href="{{ route('conversation.index') }}" class="m-5 hover:text-lg hover:text-sky-500 decoration-blue-500">Mes conversations</a>
    <a href="{{ route('home') }}" class="m-5 hover:text-lg hover:text-sky-500 decoration-blue-500">Tableau de bord</a>
    <a href="{{ route('logout') }}" class="m-5 hover:text-lg hover:text-red-400 decoration-blue-500" onclick="event.preventDefault(); 
            document.getElementById('logout-form').submit();">Déconnexion</a>
    <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display:none;">
      @csrf
    </form>
    @endguest
  </nav>
</header>