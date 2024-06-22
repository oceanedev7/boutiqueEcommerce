<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/css/app.css','resources/js/app.js']) 
    <title>Boutique E-commerce</title>
</head>
<body>
    
<nav class="h-20 text-center flex items-center justify-center" style="background-color: #26261D"> 
    <h1 class="font-bold text-white text-xl">Boutique E-commerce</h1>
    <a href="{{ route('login') }}" class="btn btn-primary text-white">Connexion</a>
    <a href="{{ route('register') }}" class="btn btn-primary text-white">Créer un compte</a>
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


</body>
</html>