<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js']) 
    <title>Boutique E-commerce</title>
</head>
<body>
    
<nav class="h-20 text-center flex items-center justify-center" style="background-color: #26261D"> 
    <h1 class="font-bold text-white text-xl">Boutique E-commerce</h1>
</nav>

<header>
<img class="w-full" src="{{ asset('images/header.png') }}" alt="Image">
</header>

<main>

  <div class="text-center"> 
    <button style="background-color: #26261D" class="mt-16 mr-4 focus:outline-none text-white font-medium rounded-lg text-sm px-5 py-2.5">  <a href="{{ route('ajouterProduits') }}">Ajouter un nouveau produit</a> </button>
    <button style="background-color: #26261D" class="mt-16 focus:outline-none text-white font-medium rounded-lg text-sm px-5 py-2.5"> <a href="{{ route('editerProduits', $product->id) }}">Modifier un produit</a> </button>
  </div>
  
  
  <div class="bg-white">
    <div class="mx-auto max-w-2xl px-4 py-8 sm:px-6 sm:py-12 lg:max-w-7xl lg:px-8"> <!-- Ajustement de py-16 à py-8 -->
      <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8"> <!-- Ajustement de mt-6 à mt-4 -->
        @foreach ($produits as $produit)
        <div class="group relative">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
            <img src="https://i.pinimg.com/736x/0c/80/67/0c8067680de2b413596e30e9688cb846.jpg" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
          </div>
          <div class="mt-4 flex justify-between">
            <div>
              <h3 class="text-sm text-gray-700">
                <a href="{{ route('afficherDetails', $produit->id) }}">
                  <span aria-hidden="true" class="absolute inset-0"></span>
                  {{ $produit->name }}
                </a>
              </h3>
            </div>
            <p class="text-sm font-medium text-gray-900">{{ $produit->price }} €</p>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  
</main>



<footer>

</footer>

</body>
</html>