<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Modifier produit</title>
</head>

<body>

<nav class="h-20 text-center flex items-center justify-center" style="background-color: #26261D"> 
    <h1 class="font-bold text-white text-xl">Boutique E-commerce</h1>
    <a href="{{ route('login') }}" class="btn btn-primary text-white">Connexion</a>
    <a href="{{ route('register') }}" class="btn btn-primary text-white">Créer un compte</a>
</nav>

<h2 class="text-2xl font-bold mt-10 mb-6 text-center text-gray-800">Modifier le produit</h2>

<form action="{{ route('modifierProduits', $product->id) }}" method="post" class="mx-8"> 
    @csrf
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Nom du produit</label>
        <input value="{{ $product->name }}" type="text" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="description">Description</label>
        <textarea name="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ $product->description }}</textarea>
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="price">Prix</label>
        <input value="{{ $product->price }}" type="text" name="price" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    </div>
    <div class="flex items-center justify-between">
        <button type="submit" class="bg-gray-800 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" style="background-color: #26261D">
            Modifier
        </button>
        <a href="{{ route('supprimerProduits', $product->id) }}" class="text-red-500 hover:text-red-700 ml-4">
            <i class="fas fa-trash text-2xl"></i> 
        </a>
    </div>
</form>
</body>
</html>