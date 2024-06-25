<x-app-layout>
<nav class="h-20 text-center flex items-center justify-center" style="background-color: #26261D"> 
    
    <h1 class="font-bold text-white text-xl">Boutique E-commerce</h1>
    {{-- <a href="{{ route('login') }}" class="btn btn-primary text-white">Connexion</a>
    <a href="{{ route('register') }}" class="btn btn-primary text-white">Créer un compte</a> --}}

    <div class="hidden sm:flex sm:items-center sm:ms-6">
        <x-dropdown align="right" width="48">
            <x-slot name="trigger">
                <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                    <div>{{ Auth::user()->name }}</div>

                    <div class="ms-1">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </button>
            </x-slot>

            <x-slot name="content">
                <x-dropdown-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-dropdown-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </x-slot>
        </x-dropdown>
    </div>
</x-app-layout>
</nav>

    <header>
        <img class="w-full" src="{{ asset('images/header.png') }}" alt="Image">
        </header>
        
        <main>
        
          <div class="text-center"> 
            <button style="background-color: #26261D" class="mt-16 mr-4 focus:outline-none text-white font-medium rounded-lg text-sm px-5 py-2.5">  <a href="{{ route('ajouterProduits') }}">Ajouter un nouveau produit</a> </button>
          </div>
          
          
          <div class="bg-white">
            <div class="mx-auto max-w-2xl px-4 py-8 sm:px-6 sm:py-12 lg:max-w-7xl lg:px-8">
                <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                                     
                @foreach ($produits as $produit)   
                    <div class="group relative">
                        <a href="{{ route('afficherDetails', $produit->id) }}">
                            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                                <img src="https://i.pinimg.com/736x/0c/80/67/0c8067680de2b413596e30e9688cb846.jpg" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                            </div>
                        </a>
                        <div class="mt-4 flex justify-between">
                            <div>
                                <h3 class="text-sm text-gray-700">
                                    {{ $produit->name }}
                                </h3>
                            </div>
                            <p class="text-sm font-medium text-gray-900">{{ $produit->price }} €</p>
                        </div>
                        <div class="mt-4">
                            <button style="background-color: #26261D" class="focus:outline-none text-white font-medium rounded-lg text-sm px-5 py-2.5">
                                <a href="{{ route('editerProduits', $produit->id) }}">Modifier ce produit</a>
                            </button>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        
        
          
        </main>
        













    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}




