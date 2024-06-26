<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Boutique E-commerce</title>
</head>
<body>
    <nav class="h-20 flex items-center justify-between relative" style="background-color: #26261D"> 
    
        <div class="absolute left-1/2 transform -translate-x-1/2">
            <h1 class="font-bold text-white text-xl">Boutique E-commerce</h1>
        </div>
    
        <div class="ml-auto mr-4">
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-700 dark:text-gray-300 bg-white dark:bg-gray-800 hover:text-gray-900 dark:hover:text-gray-400 focus:outline-none transition ease-in-out duration-150">
                        <div class="font-semibold">{{ Auth::user()->name }}</div>
                        <div class="ms-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>
        
                <x-slot name="content">
                    <x-dropdown-link :href="route('profile.edit')" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
                        {{ __('Mon Profil') }}
                    </x-dropdown-link>
        
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
        
                        <x-dropdown-link :href="route('logout')"
                                         onclick="event.preventDefault(); this.closest('form').submit();"
                                         class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
                            {{ __('Se déconnecter') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
        </div>
    </nav> 
    
    <header>
    <img class="w-full" src="{{ asset('images/header.png') }}" alt="Image">
    </header>
    
    <main>
      
  
       <div class="bg-white">
        <div class="mx-auto max-w-2xl px-4 py-8 sm:px-6 sm:py-12 lg:max-w-7xl lg:px-8">
            <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                @if (isset($produits) && count($produits)>0)
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
                            </h3><div class="text-sm font-medium text-gray-900">{{ $produit->price }} €</div>
                        </div>
                   
                   
                        <button style="background-color: #26261D; font-family: Arial, sans-serif; font-size: 12px;" class="ml-4 focus:outline-none text-white rounded-lg px-5 py-2.5 font-sans tracking-wide">
                            <i class="fa-solid fa-cart-shopping"></i> Ajouter au panier
                          </button>
                                               
                    </div> 
                 </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
      
    </main>

</body>
</html>